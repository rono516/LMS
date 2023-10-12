  web-deploy:

    runs-on: ubuntu-latest

    steps:
    - name: Get latest code
    - uses: actions/checkout@v3
    - name: Sync files
    - uses: actions/checkout@v3
    - with: 
        server: ftp.globaltempingservices.co.ke
        username: globalt@lms.globaltempingservices.co.ke
        password: 4W]01OTZS@Ru
        server-dir: /home/globalt/lms.globaltempingservices.co.ke