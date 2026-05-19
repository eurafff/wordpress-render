# Configuração Render + Aiven

Para resolver o erro de conexão, copie e cole estas variáveis na aba **Environment** do seu Web Service no Render:

| Key | Value |
| :--- | :--- |
| **WORDPRESS_DB_HOST** | `elevateronnig-elevaterunnig.a.aivencloud.com:15759` |
| **WORDPRESS_DB_USER** | `avnadmin` |
| **WORDPRESS_DB_PASSWORD** | `SUA_SENHA_AQUIV_DO_AIVEN` |
| **WORDPRESS_DB_NAME** | `defaultdb` |
| **WORDPRESS_TABLE_PREFIX** | `wp_` |

## Importante (No Painel do Aiven):
1. Vá em **Allowed IP Addresses**.
2. Adicione `0.0.0.0/0` e salve. 
3. Verifique se o status do banco está **Running** (Verde).

## No Render:
1. Vá em **Disks** e adicione um disco de 1GB em `/var/www/html/wp-content/uploads` para não perder suas fotos.
