        <footer class="footer">
            <div class="pure-menu pure-menu-horizontal pure-menu-open">
                <ul>
                    <li><a href="http://purecss.io/">About</a></li>
                    <li><a href="http://twitter.com/yuilibrary/">Twitter</a></li>
                    <li><a href="http://github.com/yui/pure/">Github</a></li>
                </ul>
            </div>
        </footer>
    </div>
</div>

<script src="http://yui.yahooapis.com/3.10.1/build/yui/yui-min.js"></script>
<script>
YUI().use('node-base', 'node-event-delegate', function (Y) {
    // This just makes sure that the href="#" attached to the <a> elements
    // don't scroll you back up the page.
    Y.one('.content').delegate('click', function (e) {
        e.preventDefault();
    }, 'a[href="#"]');
});
</script>



</body>
</html>
