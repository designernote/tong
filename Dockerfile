# PHP 베이스 이미지 선택
FROM php:8.0-cli

# 현재 디렉토리를 작업 디렉토리로 설정
WORKDIR /var/www/html

# 현재 디렉토리의 모든 파일을 컨테이너에 복사
COPY . .

# PHP 내장 서버 실행
CMD ["php", "-S", "0.0.0.0:8000", "-t", "."]
