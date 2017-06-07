<div class="flex-container">
    <header class="sidebar flex-container__sidebar">
        <div class="sidebar__logo">
            <svg class="sidebar__logo-image" width="52px" height="52px" viewBox="0 0 170 170" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>PrimoCSS logo</title>
                <desc>Logo image for the PrimoCSS framework.</desc>
                <g id="logo" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="logo__graphics" transform="translate(0.000000, -3.000000)">
                        <rect id="logo__rectangle" fill="#ED4B37" x="0" y="3" width="170" height="170" rx="8"></rect>
                        <text id="logo__text" font-family="HelveticaNeue-Bold, Helvetica Neue" font-size="144" font-weight="bold" letter-spacing="0.428571403" fill="#FFFFFF">
                            <tspan x="39.2617143" y="140">P</tspan>
                        </text>
                    </g>
                </g>
            </svg>
            <h1 class="sidebar__logo-text"><?= $site->title()->html() ?></h1>
        </div>
        <?php snippet('menu') ?>
    </header>
