# **nmap-parser**

This Python script is designed to automate **Nmap** network scanning and export the parsed results in either CSV, MySQL or SQLite format. This tool is useful for network administrators and security professionals who need to store and analyze Nmap scan results in a structured and queryable format.

## Features

- parses Nmap XML output file to extract informations
- exports parsed data directly into multiple format

## Repository content

```bash
nmap-parser
|   nmap-parser.py
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

## Requirements

- Python
- Nmap

### MySQL

If you intend to use MySQL, you will need these requirements :
- MySQL (local or remote) with an already existing database
- Create a `.env` file :
  ```bash
  MYSQL_HOST=localhost
  MYSQL_USER=nmap
  MYSQL_PASSWORD=nmap
  MYSQL_DATABASE=nmap
  ```

## Installation

1. **Clone the repository**

```bash
git clone https://github.com/oxrvm/nmap-parser.git
cd nmap-parser
```

2. **Create environment**

    Windows :
    ```bash
    python -m venv .venv
    .venv\Scripts\activate
    pip install -r requirements.txt
    ```
    Linux :
    ```bash
    python3 -m venv .venv
    source .venv/bin/activate
    pip install -r requirements.txt
    ```

## Usage

```bash
usage: nmap-parser.py [-h] -e FORMAT [FORMAT ...]

This Python script is designed to automate Nmap network scanning and export the parsed results in either CSV, MySQL or SQLite format. This tool is useful for network administrators and security professionals
who need to store and analyze Nmap scan results in a structured and queryable format.

options:
  -h, --help            show this help message and exit
  -e, --export FORMAT [FORMAT ...]
                        export data in a specific format
```