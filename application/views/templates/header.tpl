<header>
    <ul id="translate" class="dropdown-content">
    {foreach $list2 as $item}
        <li>{$item}</li>
    {/foreach}
    </ul>
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <img src="{$logo}" class="brand-logo logo-osaky" />
            <a href="#" data-activates="mobile" class="button-collapse"><i class="fa fa-bars fa-2x amber-text text-darken-1"></i></a>
            <ul id="desktop" class="right hide-on-med-and-down" >
                {foreach $list1 as $item}
                    <li><a href="#{$item}" class="black-text open-sans regular"> {$item} </a></li>
                {/foreach}
                <li><a class="dropdown-button amber-text text-darken-1" href="#!" data-activates="translate"><i class="fa fa-globe" aria-hidden="true"></i>&nbsp; <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
            </ul>
            <ul class="side-nav" id="mobile">
                <li>
                    <div class="background">
                        <img src="{$logo}">
                    </div>
                </li>
                {foreach $list1 as $item}
                    <li><a href="#{$item}"> {$item} </a></li>
                {/foreach}
            </ul>
        </div>
    </nav>
</header>
