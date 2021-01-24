var divSquare = '<div id="s$coord" class="square $color"></div>'
var divFigure ='<div id="s$coord" class="figure">$figure</div>'

$(function () {
    addSquares();
    showFigureAt(56, 'K')
    showFigureAt(43, 'Q')
})

function addSquares() {
    $('.board').html('');
    for (var coord = 0; coord < 64; coord++)
        $('.board').append(divSquare
            .replace('$coord', coord)
            .replace('$color',
                isBlackSquareAt(coord) ? 'black' : 'white'));
}

function showFigureAt(coord, figure) {
    $('#s' + coord).html(divFigure
        .replace('$coord', coord)
        .replace('$figure', getChessSymbol(figure)));

}

function getChessSymbol(figure) {
    switch (figure) {
        case 'K' : return '&#9812';
        case 'Q' : return '&#9813';
    }

}

function isBlackSquareAt(coord) {
    return (coord % 8 + Math.floor(coord / 8)) % 2;
}