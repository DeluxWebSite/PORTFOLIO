$(function () {
  var winCellIndex = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [2, 4, 6],
  ]
  var selectedCells = { x: [], o: [] }
  var player = 'x'

  $('.wrap').on('click', '.cell:not(".cell-x,.cell-o")', oneStep)

  function oneStep(event) {
    var $cell = $(event.currentTarget)

    $cell.addClass('cell-' + player)

    var indexCell = $('.wrap .cell').index($cell)
    var selectedCellsPlayer = selectedCells[player]

    selectedCellsPlayer.push(indexCell)

    checkWinner(selectedCellsPlayer)

    if (player === 'x') {
      player = 'o'
    } else {
      player = 'x'
    }
  }
  function checkWinner(selectedCellsPlayer) {
    for (var i = 0; i < winCellIndex.length; i++) {
      var allWinCells = true
      for (var j = 0; j < winCellIndex[i].length; j++) {
        if ($.inArray(winCellIndex[i][j], selectedCellsPlayer) === -1) {
          allWinCells = false
        }
      }
      if (allWinCells) {
        alert('Player ' + player + ' win!!!')
        $('.wrap').off('click')
        break
      }
      if (!allWinCells && $('.cell:not(".cell-x,.cell-o")').length === 0) {
        alert('Ходов больше нет!')
        $('.wrap').off('click')
        break
      }
    }
  }
})
