-- 出品者（占い師）
CREATE TABLE seller (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL, -- 占い師ID
    nickname VARCHAR(255), -- ニックネーム
    last_login_time TIMESTAMP, -- 最後のログイン時間
    availability_status ENUM('available', 'unavailable'), -- 利用可能状態
    gender ENUM('male', 'female'), -- 性別
    age INT UNSIGNED, -- 年齢
    sales_record INT UNSIGNED, -- 販売実績数
    rating DECIMAL(2,1), -- 評価
    follower_count INT UNSIGNED, -- フォロワー数
    coconala_user_id INT UNSIGNED, -- ココナラユーザーID
    search_text VARCHAR(512), -- 検索テキスト
    detail TEXT, -- 詳細
    profile_image VARCHAR(2083), -- プロフィール画像
    created_at TIMESTAMP NOT NULL, -- 作成日時
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL, -- 更新日時
    deleted_at TIMESTAMP -- 削除日時(論理削除フラグ）
);

CREATE INDEX idx_seller_search_text ON seller(search_text); -- 検索テキストのインデックス

-- 出品者のスキル
CREATE TABLE seller_skill (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL, -- スキルID
    seller_id INT UNSIGNED NOT NULL, -- 占い師ID
    name VARCHAR(255), -- スキル名
    years_of_experience INT UNSIGNED, -- 経験年数
    created_at TIMESTAMP NOT NULL, -- 作成日時
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL -- 更新日時
);

CREATE INDEX idx_seller_skill ON seller_skill(seller_id); -- 占い師IDのインデックス

-- 出品者の特徴
CREATE TABLE seller_feature (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL, -- 資格ID
    seller_id INT UNSIGNED NOT NULL, -- 占い師ID
    feature text NOT NULL, -- 特徴
    created_at TIMESTAMP NOT NULL, -- 作成日時
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL -- 更新日時
);

CREATE INDEX idx_seller_feature ON seller_feature(seller_id); -- 占い師IDのインデックス


-- 出品者の資格
CREATE TABLE seller_qualification (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL, -- 資格ID
    seller_id INT UNSIGNED NOT NULL, -- 占い師ID
    name VARCHAR(255), -- 資格名
    acquisition_date DATE, -- 取得日
    created_at TIMESTAMP NOT NULL, -- 作成日時
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL -- 更新日時
);

CREATE INDEX idx_seller_qualification ON seller_qualification(seller_id); -- 占い師IDのインデックス

-- 出品者の経歴
CREATE TABLE seller_career (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL, -- キャリアID
    seller_id INT UNSIGNED NOT NULL, -- 占い師ID
    name VARCHAR(255), -- 経歴の項目名
    period VARCHAR(255), -- 期間
    created_at TIMESTAMP NOT NULL, -- 作成日時
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL -- 更新日時
);

CREATE INDEX idx_seller_career ON seller_career(seller_id); -- 占い師IDのインデックス

-- 出品者の受賞歴
CREATE TABLE seller_award (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL, -- 受賞ID
    seller_id INT UNSIGNED NOT NULL, -- 占い師ID
    award_name VARCHAR(255), -- 受賞名
    award_date DATE,-- 受賞日
    created_at TIMESTAMP NOT NULL, -- 作成日時
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL -- 更新日時
);

CREATE INDEX idx_seller_award ON seller_award(seller_id); -- 占い師IDのインデックス

-- 出品者のサービスデータ
CREATE TABLE seller_service (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL, -- サービスID
    seller_id INT UNSIGNED NOT NULL, -- 占い師ID
    service_name VARCHAR(255), -- サービス名
    price INT UNSIGNED, -- 料金
    created_at TIMESTAMP NOT NULL, -- 作成日時
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL -- 更新日時
);

CREATE INDEX idx_seller_service ON seller_service(seller_id); -- 占い師IDのインデックス

-- スクレイピング結果の生データ
CREATE TABLE seller_scraping_result (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL, -- スクレイピング結果ID
    seller_id INT UNSIGNED NOT NULL, -- 占い師ID
    result_data TEXT, -- 結果データ
    created_at TIMESTAMP NOT NULL, -- 作成日時
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL -- 更新日時
);

CREATE INDEX idx_seller_scraping_result ON seller_scraping_result(seller_id); -- 占い師IDのインデックス

-- 口コミデータ
CREATE TABLE seller_review (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL, -- レビューID
    target_seller_id INT UNSIGNED NOT NULL, -- 口コミ対象占い師ID
    review TEXT, -- レビューデータ
    rate UNSIGNED float, -- 評価レート
    created_at TIMESTAMP NOT NULL, -- 作成日時
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL -- 更新日時
);

CREATE INDEX idx_seller_review ON seller_review(seller_id); -- 占い師IDのインデックス

