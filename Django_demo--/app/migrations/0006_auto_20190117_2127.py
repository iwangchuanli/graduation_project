# Generated by Django 2.1.4 on 2019-01-17 21:27

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('app', '0005_auto_20190117_1154'),
    ]

    operations = [
        migrations.RenameField(
            model_name='record',
            old_name='sort',
            new_name='withdraw',
        ),
    ]
