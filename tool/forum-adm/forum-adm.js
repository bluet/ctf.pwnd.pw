var phantom = require('phantom');
//$cookie_admin = 'mmmnmmmnmmmnmmmn';
(async function() {   
    const instance = await phantom.create();
    const page = await instance.createPage();
    page.addCookie({
        name: 'cookie',
        value: 'mmmnmmmnmmmnmmmn',
        domain: 'ctf.bluet.org'
      });
    const status = await page.open('http://ctf.bluet.org:20001/bulletin_board.php');
    console.log(status);
    const content = await page.property('content');
    console.log(content);
    await instance.exit();
}());
