# Generated by Django 2.1.7 on 2019-03-30 11:20

import datetime
from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Target',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('uid', models.CharField(max_length=20, verbose_name='爬取用户')),
                ('cookie', models.TextField(verbose_name='设置cookie')),
                ('add_time', models.DateTimeField(default=datetime.datetime.now, verbose_name='添加时间')),
            ],
            options={
                'verbose_name': '爬虫设置',
                'verbose_name_plural': '爬虫设置',
            },
        ),
        migrations.CreateModel(
            name='TweetsInfo',
            fields=[
                ('_id', models.CharField(max_length=50, primary_key=True, serialize=False, verbose_name='微博ID')),
                ('Content', models.TextField(verbose_name='微博内容')),
                ('PubTime', models.DateTimeField(blank=True, verbose_name='发表时间')),
                ('Co_oridinates', models.CharField(blank=True, max_length=300, verbose_name='定位坐标')),
                ('Tools', models.CharField(blank=True, max_length=300, verbose_name='发布工具')),
                ('Like', models.IntegerField(blank=True, default=0, verbose_name='点赞数')),
                ('Comment', models.IntegerField(blank=True, default=0, verbose_name='评论数')),
                ('Transfer', models.IntegerField(blank=True, default=0, verbose_name='转载数')),
            ],
            options={
                'verbose_name': '微博信息',
                'verbose_name_plural': '微博信息',
            },
        ),
        migrations.CreateModel(
            name='UserInfo',
            fields=[
                ('_id', models.CharField(max_length=20, primary_key=True, serialize=False, verbose_name='用户id')),
                ('Image', models.TextField(verbose_name='用户头像')),
                ('NickName', models.CharField(max_length=30, verbose_name='昵称')),
                ('Gender', models.CharField(choices=[('male', '男'), ('female', '女')], default='female', max_length=6, verbose_name='性别')),
                ('Province', models.CharField(blank=True, max_length=30, verbose_name='所在省')),
                ('City', models.CharField(blank=True, max_length=30, verbose_name='所在城市')),
                ('BriefIntroduction', models.CharField(blank=True, max_length=500, verbose_name='简介')),
                ('Birthday', models.DateField(blank=True, null=True, verbose_name='生日')),
                ('Num_Tweets', models.IntegerField(default=0, verbose_name='微博数')),
                ('Num_Follows', models.IntegerField(default=0, verbose_name='关注数')),
                ('Num_Fans', models.IntegerField(blank=True, default=0, verbose_name='粉丝数')),
                ('SexOrientation', models.CharField(blank=True, max_length=30, verbose_name='性取向')),
                ('Sentiment', models.CharField(blank=True, max_length=30, verbose_name='感情状况')),
                ('VIPlevel', models.CharField(blank=True, max_length=30, verbose_name='会员等级')),
                ('Authentication', models.CharField(blank=True, max_length=30, verbose_name='认证')),
                ('URL', models.CharField(blank=True, max_length=30, verbose_name='首页链接')),
            ],
            options={
                'verbose_name': '用户信息',
                'verbose_name_plural': '用户信息',
            },
        ),
        migrations.AddField(
            model_name='tweetsinfo',
            name='UserInfo',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='SpiderAPI.UserInfo', verbose_name='用户信息'),
        ),
    ]