# Generated by Django 4.2.18 on 2025-01-20 10:59

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('book_outlet', '0006_addres_alter_book_author_author_addres'),
    ]

    operations = [
        migrations.CreateModel(
            name='Country',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=80)),
                ('code', models.CharField(max_length=10)),
            ],
            options={
                'verbose_name_plural': 'Countries',
            },
        ),
        migrations.RenameModel(
            old_name='Addres',
            new_name='Address',
        ),
        migrations.AlterModelOptions(
            name='address',
            options={'verbose_name_plural': 'Address entries'},
        ),
        migrations.AddField(
            model_name='book',
            name='published_countries',
            field=models.ManyToManyField(to='book_outlet.country'),
        ),
    ]
