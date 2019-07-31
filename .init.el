;emacsでF5押したら「2010/09/22 18:29:20」のような日付が挿入される設定。
(define-key global-map [f5]
  '(lambda ()
     (interactive)
          (insert (format-time-string "%Y/%m/%d %H:%M:%S"))))

 ;emacsでF6押したら ChiMeRa2のセパレータが入力される
(define-key global-map [f6]
  '(lambda ()
     (interactive)
          (insert (format-time-string "--- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- %Y"))))         
(package-initialize)
(setq package-archives
      '(("gnu" . "http://elpa.gnu.org/packages/")
        ("melpa" . "http://melpa.org/packages/")
        ("org" . "http://orgmode.org/elpa/")))
;パッケージ情報を最新に更新
;M-x package-refresh-contents
;M-x package-list-packages

;fuzzy
;php-mode
;auto-complete
