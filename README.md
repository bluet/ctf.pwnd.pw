# 暨大首個 Someone's Great Website （快要）上線啦～～

NCNU ISSDNA 害羞著出品，其中包含了：

- 原本的 NCNU LSA 資訊安全課程遊戲
- NCNU 碩士班入學測驗
- 還有未來的你

## 目錄結構

- `ctf-entry/` 為主站。
- `tool/forum-adm/` 內放的是「模擬討論區管理員」的程式。
- 有些目錄中有 `run.sh` 檔，內容是啟動此題目的命令。
- 每個題目分別至於獨立資料夾，以利使用 docker 獨立包裝，增加安全性。

## 新增題目步驟

1. 每個題目獨立目錄，因為要個別包成 docker
2. 在 `ctf-entry/public/` 目錄中新增相對應的題目說明 html
3. 在 `ctf-entry/views/index.jade` 裡加上條目

## 環境建立步驟

### 建立設定檔

- `cp env-example .env`
- 可依照個人喜好調整 `.env`

### 啟動

- `docker-compose up -d`

### 關閉

- `docker-compose down`