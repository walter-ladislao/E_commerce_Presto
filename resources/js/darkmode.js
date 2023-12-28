let root = document.documentElement;
let darkmode = document.querySelector('#darkmode');

if (localStorage.getItem('dark-mode') == 'disabled') {
    root.style.setProperty('--bg', '#616161');
    root.style.setProperty('--bg3', '#f0fcdc');
    root.style.setProperty('--acc', '#ffa268');
    root.style.setProperty('--txt', '#333');
    root.style.setProperty('--sec', '#F7F7F7');
    root.style.setProperty('--accbtn', '#eb762d');
    root.style.setProperty('--spanfront1', '#ff6547');
    root.style.setProperty('--spanfront2', '#ffb144');
    root.style.setProperty('--sec1', '#F7F7F7');
    root.style.setProperty('--borderCard', 'coral');
    root.style.setProperty('--acc2', '#ff6200');
    root.style.setProperty('--cardback1', '#ffb587');
    root.style.setProperty('--cardback2', '#ffca81');
    root.style.setProperty('--cardback3', '#fea36a');
    root.style.setProperty('--shadowlogout', '#a84100');
    
} else {
    root.style.setProperty('--bg', '#A2D7FB');
    root.style.setProperty('--bg3', '#616161');
    root.style.setProperty('--acc', '#333');
    root.style.setProperty('--txt', '#A2D7FB');
    root.style.setProperty('--accbtn', '#8D9CED');
    root.style.setProperty('--sec', '#A2D7FB');
    root.style.setProperty('--spanfront1', '#697dec');
    root.style.setProperty('--spanfront2', '#A2D7FB');
    root.style.setProperty('--sec1', '#333');
    root.style.setProperty('--borderCard', '#8D9CED');
    root.style.setProperty('--acc2', '#697dec');
    root.style.setProperty('--cardback1', '#A2D7FB');
    root.style.setProperty('--cardback2', '#b2bcf0');
    root.style.setProperty('--cardback3', '#68c2ff');
    root.style.setProperty('--shadowlogout', '#4458c7');
    darkmode.checked = true;
}

darkmode.addEventListener('click', ()=>{
    if (localStorage.getItem('dark-mode') == 'disabled') {
        localStorage.setItem('dark-mode','enabled')
        root.style.setProperty('--bg', '#A2D7FB');
        root.style.setProperty('--bg3', '#616161');
        root.style.setProperty('--acc', '#333');
        root.style.setProperty('--txt', '#A2D7FB');
        root.style.setProperty('--accbtn', '#8D9CED');
        root.style.setProperty('--sec', '#A2D7FB');
        root.style.setProperty('--spanfront1', '#697dec');
        root.style.setProperty('--spanfront2', '#A2D7FB');
        root.style.setProperty('--sec1', '#333');
        root.style.setProperty('--borderCard', '#8D9CED');
        root.style.setProperty('--acc2', '#697dec');
        root.style.setProperty('--cardback1', '#A2D7FB');
        root.style.setProperty('--cardback2', '#b2bcf0');
        root.style.setProperty('--cardback3', '#68c2ff');
        root.style.setProperty('--shadowlogout', '#4458c7');
        
    }
    else if (localStorage.getItem('dark-mode') == 'enabled') {
        localStorage.setItem('dark-mode','disabled')
        root.style.setProperty('--bg', '#616161');
        root.style.setProperty('--bg3', '#f0fcdc');
        root.style.setProperty('--acc', '#ffa268');
        root.style.setProperty('--txt', '#333');
        root.style.setProperty('--sec', '#F7F7F7');
        root.style.setProperty('--accbtn', '#eb762d');
        root.style.setProperty('--spanfront1', '#ff6547');
        root.style.setProperty('--spanfront2', '#ffb144');
        root.style.setProperty('--sec1', '#F7F7F7');
        root.style.setProperty('--borderCard', 'coral');
        root.style.setProperty('--acc2', '#ff6200');
        root.style.setProperty('--cardback1', '#ffb587');
        root.style.setProperty('--cardback2', '#ffca81');
        root.style.setProperty('--cardback3', '#fea36a');
        root.style.setProperty('--shadowlogout', '#a84100');
    }
})

