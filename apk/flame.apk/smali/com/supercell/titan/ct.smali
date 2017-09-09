.class Lcom/supercell/titan/ct;
.super Ljava/lang/Object;

# interfaces
.implements Ljava/lang/Runnable;


# instance fields
.field final synthetic a:Ljava/lang/String;

.field final synthetic b:Ljava/lang/String;

.field final synthetic c:Lcom/supercell/titan/cs;


# direct methods
.method constructor <init>(Lcom/supercell/titan/cs;Ljava/lang/String;Ljava/lang/String;)V
    .locals 0

    iput-object p1, p0, Lcom/supercell/titan/ct;->c:Lcom/supercell/titan/cs;

    iput-object p2, p0, Lcom/supercell/titan/ct;->a:Ljava/lang/String;

    iput-object p3, p0, Lcom/supercell/titan/ct;->b:Ljava/lang/String;

    invoke-direct {p0}, Ljava/lang/Object;-><init>()V

    return-void
.end method


# virtual methods
.method public run()V
    .locals 2

    iget-object v0, p0, Lcom/supercell/titan/ct;->a:Ljava/lang/String;

    iget-object v1, p0, Lcom/supercell/titan/ct;->b:Ljava/lang/String;

    invoke-static {v0, v1}, Lcom/supercell/titan/NativeFacebookManager;->facebookLogged(Ljava/lang/String;Ljava/lang/String;)V

    return-void
.end method
