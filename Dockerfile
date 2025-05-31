ARG ALPINE_TAG=3.22
ARG PYTHON_TAG=3.13.3

FROM python:${PYTHON_TAG}-alpine${ALPINE_TAG}

WORKDIR /app

ENV PYTHONDONTWRITEBYTECODE 1
ENV PYTHONUNBUFFERED 1

RUN apk add --no-cache \
    gcc \
    mariadb-connector-c-dev \
    musl-dev \
    nmap \
    nmap-scripts

COPY requirements.txt .

RUN pip install -r requirements.txt --no-cache-dir

COPY nmap-parser.py .

COPY modules/ modules/

COPY settings settings/

CMD [ "python3", "nmap-parser.py", "--export", "mysql" ]