#!/bin/bash

audio=$1
curl -XPOST 'https://api.wit.ai/speech?v=20160526' -i -L -H "Authorization: Bearer EAO4P6GZIN7FFGRQDPIIILKCA3ZLZATO" -H "Content-Type: audio/wav" --data-binary "@${audio}"
