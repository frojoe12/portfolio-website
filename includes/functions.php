<?php

function render_cards($cards) {
    $output = "";
    $card_count=2;
    foreach ($cards as $card) {
        $img_overlay_text = $card['img_overlay_text'] ?? "Visit Website";
        $img_overlay_class = "view-button-web";
        if ($img_overlay_text !== "Visit Website") {
            $img_overlay_class = "view-button-other";
        }
        $output .= '
            <div id="animate-in-'.$card_count.'" class="hidden" type="project">
                <h3 class="card-title">' . $card['title'] . '</h3>
                <a class="imghref" href="' . $card['href'] . '" target="_blank" rel="noopener noreferrer"><div class="img-overlay"><div class="view-button ' . $img_overlay_class . '">' . $img_overlay_text . '</div></div><img src="' . $card['img_src'] . '" /></a>
                <p>' . $card['desc'] . '</p>
                <a class="texthref" href="' . $card['href'] . '" target="_blank" rel="noopener noreferrer">' . $card['href_text'] . '</a>
            </div>
        ';     
        $card_count++;
    }
    return $output;
}

function snippets($snippets) {
    $output = "";
    foreach ($snippets as $snippet) {
        $output .= '
            <h3>'.$snippet['title'].'</h3>
            <pre contenteditable>'.$snippet['code'].'</pre>
        ';     
    }
    return $output;
}