const chokidar = require('chokidar');
const {exec} = require('child_process');

chokidar.watch('./templates/**/*.twig').on('all', (event, path) => {
  exec(`./craft storybook/stories/generate ${process.cwd()}/${path}`, (error, stdout, stderr) => {
    if (error) {
      console.error(error)
      return;
    }

    if (stdout) {
      console.log(stdout);
    }

    if (stderr) {
      console.error('ERROR', stderr);
    }
  })
})
