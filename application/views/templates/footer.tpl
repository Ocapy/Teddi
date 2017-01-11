<footer class="page-footer amber darken-1">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">MENU</h5>
                <ul>
                {foreach $list1 as $item}
                    <li><a class="grey-text text-lighten-3" href="#{$item}"> {$item} </a></li>
                {/foreach}
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2017 Copyright Text
            <!-- <a class="grey-text text-lighten-4 right" href="#!">More Links</a> -->
        </div>
    </div>
</footer>