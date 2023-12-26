function checkValid() {
    if(document.getElementById('passrepeat').value == document.getElementById('pass').value)
        document.getElementById('passrepeat').style.background = 'rgba(145, 215, 242, 0.5)';
    else
        document.getElementById('passrepeat').style.background = 'rgba(242, 89, 75, 0.5)';
}