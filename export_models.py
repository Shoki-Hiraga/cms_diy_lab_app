import os
import re
import csv

MODELS_DIR = "app/Models"
OUTPUT_FILE = "models_export.csv"

# テーブル名
TABLE_REGEX = re.compile(r"protected\s+\$table\s*=\s*['\"](\w+)['\"]")
# プライマリキー
PK_REGEX = re.compile(r"protected\s+\$primaryKey\s*=\s*['\"](\w+)['\"]")
# fillable
FILLABLE_REGEX = re.compile(r"protected\s+\$fillable\s*=\s*\[([^\]]*)\]", re.S)
# guarded
GUARDED_REGEX = re.compile(r"protected\s+\$guarded\s*=\s*\[([^\]]*)\]", re.S)
# casts
CASTS_REGEX = re.compile(r"protected\s+\$casts\s*=\s*\[([^\]]*)\]", re.S)

def extract_array(content):
    # 'name', 'email' → ["name","email"]
    items = re.findall(r"['\"](\w+)['\"]", content)
    return items

def parse_model(file_path):
    with open(file_path, "r", encoding="utf-8") as f:
        content = f.read()

    model_name = os.path.basename(file_path).replace(".php", "")

    table = TABLE_REGEX.search(content)
    pk = PK_REGEX.search(content)
    fillable = FILLABLE_REGEX.search(content)
    guarded = GUARDED_REGEX.search(content)
    casts = CASTS_REGEX.search(content)

    return {
        "model": model_name,
        "table": table.group(1) if table else "",
        "primaryKey": pk.group(1) if pk else "id",
        "fillable": ", ".join(extract_array(fillable.group(1))) if fillable else "",
        "guarded": ", ".join(extract_array(guarded.group(1))) if guarded else "",
        "casts": ", ".join(re.findall(r"['\"](\w+)['\"]\s*=>\s*['\"](\w+)['\"]", casts.group(1))) if casts else "",
    }

def main():
    rows = []
    for filename in os.listdir(MODELS_DIR):
        if filename.endswith(".php"):
            filepath = os.path.join(MODELS_DIR, filename)
            rows.append(parse_model(filepath))

    # CSV出力
    with open(OUTPUT_FILE, "w", newline="", encoding="utf-8") as csvfile:
        writer = csv.DictWriter(csvfile, fieldnames=["model", "table", "primaryKey", "fillable", "guarded", "casts"])
        writer.writeheader()
        writer.writerows(rows)

    print(f"✅ Exported to {OUTPUT_FILE}")

if __name__ == "__main__":
    main()
