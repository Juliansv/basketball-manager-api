
<head>
    <style>
        :root {

            /* Colors */

            --color-white: #fff;
            --color-black: #000;
            --color-main-blue: #1976D2;
            --color-light-blue: #1E88E5;
            --color-hover-bg: rgba(0, 0, 0, 0.03);
            --color-border: rgba(0, 0, 0, 0.2);
            --color-active-border: red;

            /* Effects */
            
            --transition: all 120ms ease-in 80ms;

        .menu {
            position: relative;
        }

        .menu__button {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.25em;
            width: 20em;
            height: 2.5em;
            background-color: var(--color-main-blue);
            color: var(--color-white);
            font-size: 1.2em;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 600;
        }

        .menu:hover .menu__button {
            background-color: var(--color-light-blue);
        }

        .menu__button-icon {
            width: 1.5em;
            transition: var(--transition);
        }

        .menu:hover .menu__button-icon {
            transform: rotate(-180deg);
        }

        .menu__content {
            position: absolute;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            width: 100%;
            margin-top: 1em;
            padding: 1rem;
            font-size: 1.2rem;
            background-color: rgb(166, 255, 0);;
            border-radius: 2px;
            box-shadow: var(--primary-shadow);
            visibility: hidden;
            opacity: 0;
            transition: var(--transition);
        }

        .menu__content > *:hover {
            background-color: rgb(190, 247, 190);
        }

        .menu:hover .menu__content {
            visibility: visible;
            opacity: 1;
        }

        .menu__link {
            display: block;
            padding: 0.25em;
            margin: 0.25em 0.25em 0;
            color: var(--color-black);
            text-align: center;
            text-decoration: none;
            border-left: 0.125em solid var(--color-border);
            border-radius: 1px;
        }

        .menu__link:last-child {
            margin-bottom: 0.25em;
        }

        .menu__link:hover {
            background-color: var(--color-hover-bg);
            border-left-color: var(--color-active-border);
        }
    </style>    
</head>

<div class="main">
    <nav>
        <div class="menu">
            <button class="menu__button">
                <svg class="menu__button-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
                Menu
            </button>
            <div class="menu__content">
                {{$slot}}
            </div>
        </div>
    </nav>
</div>

