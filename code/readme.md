# node.jsのパス通す（通ってなければ）
export PATH=$HOME/.nodebrew/current/bin:$PATH

# パッケージインストール
npm install

# 静的コーディング時
1. 'compile_ejs_into'を'html'に設定して保存（/src/ejs/config/_config.ejs）
2. npx gulp

# wpのテンプレート作成時
1. 'control+c'でgulp停止
2. 'compile_ejs_into'を'wp_template'に設定して保存（/src/ejs/config/_config.ejs）
3. npx gulp wp_template

# 画像圧縮だけしたいとき
1. npx gulp img
