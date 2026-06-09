var puppeteer = require('puppeteer');
//$cookie_admin = 'mmmnmmmnmmmnmmmn';
(async function() {
    const browser = await puppeteer.launch();
    try {
        const page = await browser.newPage();
        await page.setCookie({
            name: 'cookie',
            value: 'mmmnmmmnmmmnmmmn',
            domain: 'ctf.bluet.org'
        });
        const response = await page.goto('http://ctf.bluet.org:20001/bulletin_board.php');
        console.log(response.status());
        const content = await page.content();
        console.log(content);
    } finally {
        await browser.close();
    }
}());
