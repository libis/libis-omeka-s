@ECHO OFF
docker build . -t omeka_s_libis
docker tag omeka_s_libis registry.docker.libis.be/omeka_s_libis
docker push registry.docker.libis.be/omeka_s_libis
ECHO Image built, tagged and pushed succesfully
PAUSE
