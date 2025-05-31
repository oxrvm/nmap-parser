# 🔍 **nmap-parser**

This Python script is designed to automate **Nmap** network scanning and export the parsed results in either CSV, MySQL or SQLite format. This tool is useful for network administrators and security professionals who need to store and analyze Nmap scan results in a structured and queryable format.

## ✨ Features

- parses Nmap XML output file to extract informations
- exports parsed data directly into multiple format
  - CSV
  - SQLite
  - MySQL
- easy to run with Python or Docker

## 📂 Repository structure

```bash
nmap-parser
|   nmap-parser.py
|   docker-compose.yaml
|   Dockerfile
|
+---modules
|   |   csv.py
|   |   nmap.py
|   |   sqlite.py
|   |   xml.py
|
+---results (will be generated after first run)
|       data.csv
|       data.db
|       results.xml
|
\---settings
        network.txt
```

## ⚙️ Requirements

- Python
- Nmap

### ✅ MySQL

- a running MySQL instance (local or remote)
- an existing database
- a `.env` file with filled environment variables
  ```bash
  MYSQL_HOST=localhost
  MYSQL_USER=nmap
  MYSQL_PASSWORD=nmap
  MYSQL_DATABASE=nmap
  ```

## 🔑 Installation

### 🐍 Python

1. **Clone the repository**

```bash
git clone https://github.com/oxrvm/nmap-parser.git
cd nmap-parser
```

2. **Create and activate a virtual environment**

```bash
python3 -m venv .venv
source .venv/bin/activate
pip install -r requirements.txt
```

### 🐳 Docker

1. **docker-compose**

```bash
docker compose up --build --detach
```

## 🚀 Usage

Please note the following content is only working for **Python** version.\
**Docker** version will use `python3 nmap-parser.py --export mysql`.

```bash
usage: nmap-parser.py [-h] -e FORMAT [FORMAT ...]

This Python script is designed to automate Nmap network scanning and export the parsed results in
either CSV, MySQL or SQLite format. This tool is useful for network administrators and security
professionals who need to store and analyze Nmap scan results in a structured and queryable format.

options:
  -h, --help            show this help message and exit
  -e, --export FORMAT [FORMAT ...]
                        export data in a specific format
```