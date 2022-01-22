sudo docker build . -t myimage
sudo docker run -it myimage /bin/bash
sudo docker run -d -p 80:80 -p 443:443 myimage
sudo docker ps
sudo docker exec -it 34e88adadef8 /bin/bash

cat /etc/hosts
172.17.0.2/16


sudo docker stop 34e88adadef8 && sudo docker rm 34e88adadef8