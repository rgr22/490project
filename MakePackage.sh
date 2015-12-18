#!/bin/bash

tar -zcvf /home/robin/Desktop/Packages/$1.tar.gz --exclude='/home/robin/Documents/RabbitMQ.ini' --exclude='/home/robin/Documents/RabbitMQ.ini~' --exclude='/home/robin/Documents/loginBackup.sql' --exclude='/home/robin/Documents/log.txt' --exclude='/home/robin/Documents/log.txt~' /home/robin/Documents/*
cp /home/robin/Desktop/Packages/$1.tar.gz /home/robin/Desktop/Backup/$1.tar.gz
