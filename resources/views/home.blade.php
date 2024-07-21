<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth
    <p>Congrats you logged in</p>
    <form action="/logout" method="POST">
        @csrf 
        <button>Logout</button>
    </form>
    @else
    <h1>Register</h1>
    <form action="/register" method="POST">
        @csrf
        <input type="text" placeholder="name" name="name"/><br><br>
        <input type="text" placeholder="email" name="email"/><br><br>
        <input type="password" placeholder="password"name="password"/><br><br>
<button>Register</button>
    </form>
    @endauth
    <h2>Create new post</h2>
    <form action="/create-post" method="POST">
        @csrf
        <input type="text" name="title" placeholder="post title"/>
        <textarea name="body" placeholder="bodycontent"></textarea>
        <button>Save Post</button>
    </form>
    <h1>login</h1>
    <form action="/login" method="POST">
        @csrf
        <input name="loginname" type="text" placeholder="loginname"/>
        <input name="loginpassword" type="password" placeholder="loginpassword"/>
        <button>Login</button>
    </form>
    
</body>
    </form>

</body>
</html> -->