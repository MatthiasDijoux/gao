FROM node:15.2-alpine

LABEL author="Toto-Ad" 

USER node

RUN mkdir /home/node/.npm-global
ENV PATH=/home/node/.npm-global/bin:$PATH
ENV NPM_CONFIG_PREFIX=/home/node/.npm-global

ENV HOME=/home/node

WORKDIR $HOME/app

RUN echo 'alias wtc="npm run watch"' >> ~/.bashrc

RUN echo 'alias inst="npm install"' >> ~/.bashrc