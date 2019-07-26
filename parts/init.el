(define-key global-map [f5]
  '(lambda ()
     (interactive)
     (insert (format-time-string "%Y/%m/%d %H:%M:%S"))))
(define-key global-map [f6]
  '(lambda ()
     (interactive)
               (insert (format-time-string "--- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --"))))
