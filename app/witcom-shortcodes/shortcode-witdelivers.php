<?php

    /**
     * Filename: shortcode-witdelivers.php
     * Description: Shortcode to add Wit Logo and Link
     * Author:  Ryan E. Mitchell
     */

    namespace witcom;


function wit_delivers_shortcode()
{
    ob_start(); //start buffer to output after the_content()
    ?>

        <div class="witdelivers" style="display: flex; align-items:center;">
            <span style="margin-right: 4px;font-size:10px;">Done right by </span>
            <a href="https://witdelivers.com" target="_blank">

                <svg width="58" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58 18">
                    <g fill="none" fill-rule="evenodd">
                        <path fill="#004752"
                              d="M34.699 7.8393h-.46226l-.76841-1.8379c-.038898-.095417-.083353-.23557-.083353-.23557h-.011287s-.038898.14016-.077796.23557l-.77414 1.8379h-.46209l-1.4868-3.2611c-.011114-.022369-.022228-.050505-.022228-.067456 0-.016777.011114-.033728.044629-.033728h.66804c.06703 0 .078144 0 .11166.073049l.7514 1.6083c.083527.17371.17834.4874.17834.4874h.022228s.055569-.21285.13371-.39216l.74046-1.7766h.35634l.74063 1.7766c.07797.18472.13354.39216.13354.39216h.022401s.094641-.31369.17817-.4874l.75174-1.6083c.033341-.067282.044455-.073049.11114-.073049h.66822c.033341 0 .044629.016951.044629.033728 0 .016951-.011288.045087-.022228.067456l-1.4866 3.2611M38.52 7.772c0 .033553-.033341.067282-.066683.067282h-.62341c-.033862 0-.06703-.033728-.06703-.067282V4.5444c0-.033728.033168-.067456.06703-.067456h.62341c.033341 0 .066683.033728.066683.067456V7.772M40.136 5.116c-.033341 0-.078144-.044913-.078144-.078466v-.48181c0-.033728.044802-.078816.078144-.078816h3.1627c.033341 0 .077796.045087.077796.078816v.48181c0 .033553-.044455.078466-.077796.078466h-1.2029v2.656c0 .033553-.033341.067282-.066856.067282h-.62341c-.033515 0-.066856-.033728-.066856-.067282V5.116h-1.2027M31.648 10.719v2.0843h.72952c.70694 0 1.0803-.40351 1.0803-1.0421 0-.63874-.45688-1.0423-1.0914-1.0423h-.7184zm-.69044 2.7231c-.033341 0-.066683-.033553-.066683-.066932v-3.2278c0-.033728.033341-.067282.066683-.067282h1.4088c1.0579 0 1.8485.65569 1.8485 1.6812 0 1.0143-.66804 1.6808-1.8374 1.6808h-1.42zM36.703 13.375c0 .033379-.033341.066932-.066509.066932h-.62376c-.033515 0-.066856-.033553-.066856-.066932v-3.2278c0-.033728.033341-.067282.066856-.067282h.62376c.033168 0 .066509.033553.066509.067282v3.2278M42.03 11.929c0 .86295-.60692 1.569-1.7596 1.569-1.0077 0-1.8431-.67212-1.8431-1.7369 0-1.0255.8021-1.7371 1.8431-1.7371 1.1527 0 1.6372.71161 1.6483 1.2102 0 .033728-.022228.072874-.089258.072874h-.57357c-.033341 0-.07224-.01101-.08318-.055922-.061473-.26895-.32317-.58823-.9023-.58823-.60692 0-1.0857.45367-1.0857 1.0982 0 .71144.51228 1.0982 1.0857 1.0982.60136 0 .96325-.3025.98548-.62755h-1.2305c-.033341 0-.07797-.044738-.07797-.078466v-.42588c0-.033728.044629-.078466.07797-.078466h2.0046v.28014M44.53 13.375c0 .033379-.033515.066932-.066683.066932h-.62359c-.033515 0-.06703-.033553-.06703-.066932v-3.2278c0-.033728.033515-.067282.06703-.067282h.62359c.033168 0 .066683.033553.066683.067282v3.2278M46.146 10.719c-.033341 0-.078144-.044913-.078144-.078641v-.48181c0-.033553.044802-.078466.078144-.078466h3.1627c.033515 0 .077796.044913.077796.078466v.48181c0 .033728-.044281.078641-.077796.078641h-1.2029v2.6561c0 .033379-.033341.066932-.066683.066932h-.62376c-.033515 0-.066856-.033553-.066856-.066932V10.719h-1.2025M51.451 12.266h1.1025l-.30077-.62214c-.11669-.24082-.23356-.59942-.23356-.59942h-.033515s-.11704.3586-.23374.59942l-.30094.62214zm1.3587.59383h-1.6259l-.23947.50994c-.033341.067282-.049838.072699-.11704.072699h-.66231c-.033341 0-.044629-.022369-.044629-.038971 0-.016951.011287-.044738.022401-.067456l1.57-3.2556h.57913l1.5702 3.2556c.011114.022718.022228.050505.022228.067456 0 .016602-.011114.038971-.044455.038971h-.66248c-.066856 0-.083701-.0054175-.11704-.072699l-.25058-.50994zM56.187 12.803h1.6483c.033341 0 .077796.045087.077796.078641v.48181c0 .033553-.044455.078291-.077796.078291h-2.3386c-.033515 0-.06703-.033553-.06703-.066932v-3.2278c0-.033728.033515-.067282.06703-.067282h.62341c.033341 0 .066856.033553.066856.067282v2.656M26.473 17.921c-.12727 0-.23057-.10433-.23057-.23365V.28535c0-.12897.1033-.23365.23057-.23365.12744 0 .23074.10468.23074.23365v17.402c0 .12932-.1033.23365-.23074.23365"/>
                        <path fill="#00D3D8"
                              d="M7.073 15.587l2.4431-4.2774c.041503-.072874.041503-.16235 0-.23522L5.411 3.88768c-.041677-.073223-.11913-.11814-.20317-.11814H.32163c-.18025 0-.29313.19608-.20317.35336l6.5481 11.464c.090126.15781.31622.15781.40652 0M15.731 15.587l2.4431-4.2774c.041503-.072874.041503-.16235 0-.23522l-4.1048-7.1867c-.042024-.073223-.11947-.11814-.20317-.11814h-4.8864c-.18025 0-.29313.19608-.20335.35336l6.5483 11.464c.090126.15781.31622.15781.40635 0M16.797 5.0269l2.0064-.67317.66874-2.019c.029695-.089476.15525-.089476.18494 0l.66856 2.019 2.0067.67317c.088736.029884.088736.15623 0 .18594l-2.0067.67317-.66856 2.0191c-.029695.089301-.15525.089301-.18494 0l-.66874-2.0191-2.0064-.67317c-.08891-.029709-.08891-.15606 0-.18594"/>
                    </g>
                </svg>

            </a>
        </div>

    <?php
    return ob_get_clean(); // stop buffer
}

    add_shortcode('give_wit_credit', 'witcom\wit_delivers_shortcode');