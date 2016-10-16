;; Use org-publish-project and select "circuiteelectrice" from the list

(require 'org-publish)
(setq org-publish-project-alist
      '(
        ;; Main project
        ("circuiteelectrice" :components ("html-content-generate" ""))
        ;; Generate html pages from org-mode files
        ("html-content-generate"
         :base-directory "."
         :base-extension "org"
         :publishing-directory "./public_html/"
         :recursive t
         :publishing-function org-html-publish-to-html
         :with-author nil
         :with-creator nil
         :with-email nil
         )
        ;; Copy all the pictures to the output folder
        ("poze-copy"
         :base-directory "./poze"
         :base-extension "gif\\|jpeg\\|jpg\\|png\\|PNG"
         :publishing-directory "./public_html/poze"
         :recursive t
         :publishing-function org-publish-attachment
         )
        ))

(org-publish-project "circuiteelectrice")
