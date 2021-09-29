# it-site
New modified site for DoIT (MIT India)

Using logos (Css) from fontawesome


SQL TABLES:-
  'faculty' with:
    fID =int
    name=text
    designation=text
    emailID=text
    phoneNo=text
    image=text
    type=tinyint(1) {Boolean}
    present = tinyint(1) {Boolean} ||deafult =1
    
  'fashNews' with :
    newsID=int || PRIMARY
    news=text
    link=text ||NULL=yes
    expDate=datetime
    isLink=tinyint(1) {Boolean}
  'initData' with:
    fields=text
    details=text
