document.getElementById('obtenerCodigoSalaForm').addEventListener('submit', function(event) {
    var codigotiposala = document.getElementById('codigotiposala').value;
    this.action = this.action.replace('__codigotiposala__', codigotiposala);
});