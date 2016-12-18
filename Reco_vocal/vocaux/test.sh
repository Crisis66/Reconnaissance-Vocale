#!/bin/bash

rec recording.wav rate 16k silence 1 0.1 3% -1 3.0 3% &
p=$!
sleep 1
until [ "$var1" != "$var2" ]; do
    var1=`du "recording.wav"`
    sleep 1
    var2=`du "recording.wav"`
done
echo "Sound Detected"
until [ "$var1" == "$var2" ]; do
    var1=`du "recording.wav"`
    sleep 0.5
    var2=`du "recording.wav"`
done
echo "Silence Detected"
kill $p
