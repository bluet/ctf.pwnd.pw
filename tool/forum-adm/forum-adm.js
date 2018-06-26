var phantom = require('phantom');
//$cookie_admin = 'mmmnmmmnmmmnmmmn';
(async function() {   
    const instance = await phantom.create();
    const page = await instance.createPage();
    page.addCookie({
        name: 'cookie',
        value: 'mmmnmmmnmmmnmmmn',
        domain: '167.99.71.81'
      });
    const status = await page.open('http://167.99.71.81/exam-web/bulletin_board.php');
    console.log(status);
    const content = await page.property('content');
    console.log(content);
    await instance.exit();
}());
