# Generated by Django 2.1.7 on 2019-04-25 10:45

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('ScrapydAPI', '0003_auto_20190408_1805'),
    ]

    operations = [
        migrations.AddField(
            model_name='target',
            name='isScrapy',
            field=models.IntegerField(default=0, max_length=2, verbose_name='是否爬取'),
        ),
    ]
