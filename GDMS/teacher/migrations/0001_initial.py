# -*- coding: utf-8 -*-
# Generated by Django 1.11.4 on 2018-06-28 13:11
from __future__ import unicode_literals

from django.conf import settings
from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
        ('auth', '0008_alter_user_username_max_length'),
        ('department', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='TeacherInfo',
            fields=[
                ('t_id', models.OneToOneField(on_delete=django.db.models.deletion.CASCADE, primary_key=True, serialize=False, to=settings.AUTH_USER_MODEL, verbose_name='工号')),
                ('t_title', models.CharField(max_length=10, verbose_name='职称')),
                ('t_contact', models.CharField(default='无', max_length=20, verbose_name='联系方式')),
                ('t_maxchoice', models.IntegerField(default=5, verbose_name='可选人数')),
                ('t_department', models.ForeignKey(blank=True, null=True, on_delete=django.db.models.deletion.SET_NULL, to='department.Department', verbose_name='院系')),
                ('t_office', models.ForeignKey(blank=True, null=True, on_delete=django.db.models.deletion.SET_NULL, to='department.Office', verbose_name='教研室')),
            ],
            options={
                'verbose_name': '教师信息',
                'verbose_name_plural': '教师信息',
                'ordering': ['t_id'],
                'permissions': (('is_teacher', 'is a teacher'),),
            },
        ),
    ]