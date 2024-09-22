<!DOCTYPE html>
<html lang="en">
@include('admin.includes.head')

<body>
@include('admin.includes.header')
@yield('content_addcat')
@yield('content_addtes')
@yield('content_addtop')
@yield('content_adduser')
@yield('content_cat')
@yield('content_editcat')
@yield('content_edittes')
@yield('content_edittop')
@yield('content_edituser')
@yield('content_messageDetails')
@yield('content_messages')
@yield('content_testimonials')
@yield('content_topicDetails')
@yield('content_topics')
@yield('content_users')
@include('admin.includes.footerJs')
  </body>
</html>