<div class="content">
    <form action="require.php" method="post">
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" required>
        </div>
        <br>
        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" required>
        </div>
        <br>
        <div>
            <label for="bio">bio</label>
            <textarea name="bio" required></textarea>
        </div>
        <br>
        <div>
            <input type="submit" name="submit" value="SUBMIT">
        </div>
    </form>
</div>