<?php /* bolt */ die(); ?>json:{"general":{"database":{"driver":"pdo_sqlite","host":"localhost","slaves":[],"dbname":"bolt","prefix":"bolt_","charset":"utf8","randomfunction":"RANDOM()","databasename":"bolt","path":"\/Users\/aaronstockdill\/Dropbox\/Documents\/Potato Softworks\/Personal - not yet remote\/blog\/app\/database\/bolt.db"},"sitename":"Aaron Stockdill","homepage":"page\/1","homepage_template":"index.twig","locale":"en_GB","recordsperpage":10,"recordsperdashboardwidget":5,"systemlog":{"enabled":true},"changelog":{"enabled":false},"debuglog":{"enabled":false,"level":"DEBUG","filename":"bolt-debug.log"},"debug":true,"debug_show_loggedoff":false,"debug_error_level":6135,"debug_enable_whoops":true,"debug_permission_audit_mode":false,"strict_variables":false,"theme":"aaronstockdill","debug_compressjs":true,"debug_compresscss":true,"listing_template":"listing.twig","listing_records":6,"listing_sort":"datepublish DESC","caching":{"config":true,"rendering":false,"templates":true,"request":false,"duration":10,"authenticated":false},"wysiwyg":{"images":false,"tables":false,"fontcolor":false,"align":false,"subsuper":false,"embed":false,"anchor":false,"underline":false,"strike":false,"blockquote":false,"codesnippet":false,"specialchar":false,"styles":false,"ck":{"allowedContent":true,"autoParagraph":true,"contentsCss":["\/app\/view\/css\/ckeditor-contents.css","\/app\/view\/css\/ckeditor.css"],"filebrowserWindowWidth":640,"filebrowserWindowHeight":480,"disableNativeSpellChecker":true,"allowNbsp":false},"filebrowser":{"browseUrl":"\/async\/filebrowser\/","imageBrowseUrl":"\/bolt\/files\/files"}},"liveeditor":true,"canonical":"localhost:8000","developer_notices":false,"cookies_use_remoteaddr":true,"cookies_use_browseragent":false,"cookies_use_httphost":true,"cookies_lifetime":1209600,"enforce_ssl":false,"thumbnails":{"default_thumbnail":[160,120],"default_image":[1000,750],"quality":80,"cropping":"crop","notfound_image":"view\/img\/default_notfound.png","error_image":"view\/img\/default_error.png","save_files":false,"allow_upscale":false,"exif_orientation":true},"accept_file_types":["twig","html","js","css","scss","gif","jpg","jpeg","png","ico","zip","tgz","txt","md","doc","docx","pdf","epub","xls","xlsx","ppt","pptx","mp3","ogg","wav","m4a","mp4","m4v","ogv","wmv","avi","webm","svg"],"hash_strength":10,"branding":{"name":"Bolt","path":"\/bolt","provided_by":[]},"maintenance_mode":false,"headers":{"x_frame_options":true},"maintenance_template":"maintenance_default.twig","cron_hour":3,"notfound":"page\/not-found","record_template":"record.twig","taxonomy_sort":"DESC","search_results_template":"listing.twig","search_results_records":10,"add_jquery":false,"htmlcleaner":{"allowed_tags":["div","p","br","hr","s","u","strong","em","i","b","li","ul","ol","blockquote","pre","code","tt","h1","h2","h3","h4","h5","h6","dd","dl","dh","table","tbody","thead","tfoot","th","td","tr","a","img"],"allowed_attributes":["id","class","style","name","value","href","src"]},"cookies_domain":"","session_use_storage_handler":true,"extensions":{"site":"https:\/\/extensions.bolt.cm\/","stability":"stable","enabled":true}},"taxonomy":{"tags":{"slug":"tags","singular_slug":"tag","behaves_like":"tags","postfix":"Add some freeform tags. Start a new tag by typing a comma or space.","name":"Tags","singular_name":"Tag","has_sortorder":false,"tagcloud":true},"chapters":{"slug":"chapters","singular_slug":"chapter","behaves_like":"grouping","options":{"main":"The main chapter","meta":"Meta Chapter","other":"The other stuff"},"has_sortorder":true,"name":"Chapters","singular_name":"Chapter"},"categories":{"name":"Categories","slug":"categories","singular_name":"Category","singular_slug":"category","behaves_like":"categories","multiple":true,"options":{"news":"news","events":"events","movies":"movies","music":"music","books":"books","life":"life","love":"love","fun":"fun"},"has_sortorder":false}},"contenttypes":{"pages":{"name":"Pages","singular_name":"Page","fields":{"title":{"label":"","variant":"","default":"","pattern":"","group":"content","type":"text","class":"form-control large"},"slug":{"label":"","variant":"","default":"","pattern":"","group":"content","type":"slug","uses":["title"],"class":"form-control"},"image":{"label":"","variant":"","default":"","pattern":"","group":"content","type":"image","extensions":["gif","jpg","jpeg","png"],"class":"form-control"},"teaser":{"label":"","variant":"","default":"","pattern":"","group":"content","type":"html","height":"150px","class":"form-control"},"body":{"label":"","variant":"","default":"","pattern":"","group":"content","type":"html","height":"300px","class":"form-control"},"template":{"label":"","variant":"","default":"","pattern":"","group":"content","type":"templateselect","filter":"*.twig","class":"form-control"}},"taxonomy":["chapters"],"recordsperpage":100,"slug":"pages","singular_slug":"page","show_on_dashboard":true,"show_in_menu":true,"sort":false,"default_status":"draft","viewless":false,"liveeditor":true,"tablename":"pages","groups":["content"]},"entries":{"name":"Posts","singular_name":"Post","fields":{"title":{"label":"","variant":"","default":"","pattern":"","group":"content","type":"text","class":"form-control large"},"slug":{"label":"","variant":"","default":"","pattern":"","group":"content","type":"slug","uses":["title"],"class":"form-control"},"teaser":{"label":"","variant":"","default":"","pattern":"","group":"content","type":"html","height":"150px","class":"form-control"},"body":{"label":"","variant":"","default":"","pattern":"","group":"content","type":"html","height":"300px","class":"form-control"},"image":{"label":"","variant":"","default":"","pattern":"","group":"media","type":"image","extensions":["gif","jpg","jpeg","png"],"class":"form-control"},"video":{"label":"","variant":"","default":"","pattern":"","group":"media","type":"video","class":"form-control"}},"relations":{"pages":{"multiple":false,"order":"title","label":"Select a page"}},"taxonomy":["categories","tags"],"record_template":"entry.twig","listing_template":"listing.twig","listing_records":10,"default_status":"publish","sort":"-datepublish","recordsperpage":10,"slug":"entries","singular_slug":"post","show_on_dashboard":true,"show_in_menu":true,"viewless":false,"liveeditor":true,"tablename":"entries","groups":["content","media"]},"showcases":{"name":"Showcases","slug":"showcases","singular_name":"Showcase","singular_slug":"showcase","fields":{"title":{"label":"","variant":"","default":"","pattern":".{2,255}","group":"Text","type":"text","class":"form-control large","required":true,"error":"The Title field is required, and must contain at least 2 characters"},"slug":{"label":"","variant":"","default":"","pattern":"","group":"Text","type":"slug","uses":["title"],"class":"form-control"},"html":{"label":"","variant":"","default":"","pattern":"","group":"Text","type":"html","height":"150px","class":"form-control"},"textarea":{"label":"","variant":"","default":"","pattern":"","group":"Text","type":"textarea","postfix":"<p><em>This is a plain text area. the contents will not be processed.<\/em><\/p>","class":"form-control"},"markdown":{"label":"","variant":"","default":"","pattern":"","group":"Text","type":"markdown","postfix":"<p><em>This field gets parsed as <a href='https:\/\/help.github.com\/articles\/markdown-basics'>Markdown<\/a>, when rendered on the site.<\/em><\/p>","class":"form-control"},"geolocation":{"label":"","variant":"","default":"","pattern":"","group":"Media","type":"geolocation","class":"form-control"},"video":{"label":"","variant":"","default":"","pattern":"","group":"Media","type":"video","class":"form-control"},"image":{"label":"","variant":"","default":"","pattern":"","group":"Media","type":"image","attrib":"title","extensions":["gif","jpg","png"],"class":"form-control"},"imagelist":{"label":"","variant":"","default":"","pattern":"","group":"Media","type":"imagelist","extensions":["gif","jpg","jpeg","png"],"class":"form-control"},"file":{"label":"","variant":"","default":"","pattern":"","group":"files","type":"file","extensions":["twig","html","js","css","scss","gif","jpg","jpeg","png","ico","zip","tgz","txt","md","doc","docx","pdf","epub","xls","xlsx","ppt","pptx","mp3","ogg","wav","m4a","mp4","m4v","ogv","wmv","avi","webm","svg"],"class":"form-control"},"filelist":{"label":"","variant":"","default":"","pattern":"","group":"files","type":"filelist","extensions":["twig","html","js","css","scss","gif","jpg","jpeg","png","ico","zip","tgz","txt","md","doc","docx","pdf","epub","xls","xlsx","ppt","pptx","mp3","ogg","wav","m4a","mp4","m4v","ogv","wmv","avi","webm","svg"],"class":"form-control"},"template":{"label":"","variant":"","default":"","pattern":"","group":"files","type":"templateselect","filter":"*.twig","class":"form-control"},"checkbox":{"label":"This is a checkbox","variant":"","default":"","pattern":"","group":"other","type":"checkbox","class":"form-control"},"datetime":{"label":"","variant":"inline","default":"2000-01-01","pattern":"","group":"other","type":"datetime","class":"form-control"},"date":{"label":"","variant":"inline","default":"first day of last month","pattern":"","group":"other","type":"date","class":"form-control"},"integerfield":{"label":"","variant":"","default":"","pattern":"","group":"other","type":"integer","index":true,"class":"form-control"},"floatfield":{"label":"","variant":"","default":"","pattern":"","group":"other","type":"float","class":"form-control"},"selectfield":{"label":"","variant":"","default":"","pattern":"","group":"other","type":"select","values":{"none":"none","foo":"foo","bar":"bar"},"class":"form-control"},"multiselect":{"label":"","variant":"","default":"","pattern":"","group":"other","type":"select","values":{"A-tuin":"A-tuin","Donatello":"Donatello","Rafael":"Rafael","Leonardo":"Leonardo","Michelangelo":"Michelangelo","Koopa":"Koopa","Squirtle":"Squirtle"},"multiple":true,"postfix":"Select your favourite turtle(s).","class":"form-control"},"selectentry":{"label":"","variant":"","default":"","pattern":"","group":"other","type":"select","values":"entries\/id,title","postfix":"Select an entry","autocomplete":true,"sort":"title","class":"form-control"}},"relations":{"entries":{"multiple":false,"label":"Choose an entry","order":"-id","format":"{{ item.title|escape }} <span>(\u2116 {{ item.id }})<\/span>","postfix":"By selecting an Entry, you're creating a bi-directional relationship to that Entry."},"pages":{"multiple":true,"order":"title","label":"Select zero or more pages"}},"taxonomy":["categories","tags"],"show_on_dashboard":true,"default_status":"publish","searchable":false,"icon_many":"fa:cubes","icon_one":"fa:cube","show_in_menu":true,"sort":false,"viewless":false,"liveeditor":true,"tablename":"showcases","groups":["Text","Media","files","other"]}},"menu":{"main":[{"label":"Home","title":"This is the first menu item.","path":"homepage","class":"first"},{"label":"Second item","path":"entry\/1","submenu":[{"label":"Sub 1","path":"entry\/2"},{"label":"Sub 2","class":"menu-item-class","path":"entry\/3"},{"label":"Sub 3","path":"entry\/4"},{"label":"Sub 4","class":"sub-class","path":"page\/3"}]},{"label":"All pages","path":"pages\/"},{"label":"The Bolt site","link":"http:\/\/bolt.cm","class":"last"}]},"routing":{"homepage":{"path":"\/","defaults":{"_controller":"Bolt\\Controllers\\Frontend::homepage"}},"search":{"path":"\/search","defaults":{"_controller":"Bolt\\Controllers\\Frontend::search"}},"preview":{"path":"\/preview\/{contenttypeslug}","defaults":{"_controller":"Bolt\\Controllers\\Frontend::preview"},"requirements":{"contenttypeslug":"Bolt\\Controllers\\Routing::getAnyContentTypeRequirement"}},"contentlink":{"path":"\/{contenttypeslug}\/{slug}","defaults":{"_controller":"Bolt\\Controllers\\Frontend::record"},"requirements":{"contenttypeslug":"Bolt\\Controllers\\Routing::getAnyContentTypeRequirement"}},"taxonomylink":{"path":"\/{taxonomytype}\/{slug}","defaults":{"_controller":"Bolt\\Controllers\\Frontend::taxonomy"},"requirements":{"taxonomytype":"Bolt\\Controllers\\Routing::getAnyTaxonomyTypeRequirement"}},"contentlisting":{"path":"\/{contenttypeslug}","defaults":{"_controller":"Bolt\\Controllers\\Frontend::listing"},"requirements":{"contenttypeslug":"Bolt\\Controllers\\Routing::getPluralContentTypeRequirement"}}},"permissions":{"roles":{"editor":{"description":"This user can edit some content.","label":"Editor"},"chief-editor":{"description":"This user can edit any content in the system.","label":"Chief Editor"},"admin":{"description":"User-level administrator.","label":"Administrator"},"developer":{"description":"Developer access. Only required to change system-level settings.","label":"Developer"},"guest":{"description":"This user can log on, but is not allowed to edit any content.","label":"Guest Editor"}},"roles-hierarchy":{"manipulate":{"admin":[],"developer":["admin"],"chief-editor":["admin","developer"],"editor":["admin","developer","chief-editor"],"guest":["admin","developer","chief-editor"]}},"global":{"about":["everyone"],"clearcache":["admin","developer"],"contentaction":["editor","admin","developer"],"dashboard":["everyone"],"dbcheck":["admin","developer"],"dbupdate":["admin","developer"],"dbupdate_result":["admin","developer"],"extensions":["developer"],"extensions:config":["developer"],"fileedit":["admin","developer"],"files:config":["developer"],"files:theme":["developer"],"files:uploads":["admin","developer","chief-editor","editor"],"files":["admin","developer","chief-editor","editor"],"prefill":["developer"],"profile":["everyone"],"settings":["admin","developer","everyone"],"translation":["developer"],"useraction":["admin","developer"],"useredit":["admin","developer"],"users":["admin","developer"],"roles":["admin","developer"],"maintenance-mode":["everyone"],"omnisearch":["everyone"],"changelog":["admin","developer","chief-editor"],"systemlog":["admin","developer"],"login":["anonymous"],"postLogin":["anonymous"],"logout":["everyone"]},"contenttype-all":{"edit":["developer","admin","chief-editor"],"create":["developer","admin","chief-editor"],"publish":["developer","admin","chief-editor"],"depublish":["developer","admin","chief-editor"],"delete":["developer","admin"],"change-ownership":["developer","admin"]},"contenttype-default":{"edit":["editor"],"create":["editor"],"change-ownership":["owner"],"view":["anonymous"]},"contenttypes":null},"extensions":[],"theme":{"foo":"bar","headerimage":["agriculture-field-grain-1585.jpg","beach-dune-field-1710.jpg","boat-lake-landing-stage-2535.jpg","daisies-flowers-grass-623.jpg","dark-clouds-grass-landscape-405.jpg","forest-grass-lawn-1826.jpg"],"templatefields":{"extrafields.twig":{"fields":{"section_1":{"label":"Section 1","variant":"","default":"","pattern":"","group":"ungrouped","type":"text","class":"form-control"},"section_2":{"label":"Section 2","variant":"","default":"","pattern":"","group":"ungrouped","type":"text","class":"form-control"},"image":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"image","extensions":["gif","jpg","jpeg","png"],"class":"form-control"}},"singular_name":"Template Fields extrafields.twig","slug":"extrafields-twig","singular_slug":"template-fields-extrafields-twig","show_on_dashboard":true,"show_in_menu":true,"sort":false,"default_status":"draft","viewless":false,"liveeditor":true,"tablename":"extrafields-twig","groups":false}}},"version":"2.2.8"}