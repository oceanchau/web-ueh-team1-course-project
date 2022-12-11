<?php 
function getHyperLink($url,$pageNumber,$limit){
    return  "?p=" . $url."&pageNumber=".$pageNumber."&limit=".$limit;
}
?>