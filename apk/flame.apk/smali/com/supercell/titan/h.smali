.class public final Lcom/supercell/titan/h;
.super Ljava/lang/Object;

# interfaces
.implements Landroid/opengl/GLSurfaceView$Renderer;


# instance fields
.field final synthetic a:Lcom/supercell/titan/f;

.field private b:I

.field private c:I

.field private d:F

.field private e:F

.field private f:I

.field private g:Z

.field private final h:Ljava/lang/Runnable;


# direct methods
.method public constructor <init>(Lcom/supercell/titan/f;)V
    .locals 1

    iput-object p1, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    invoke-direct {p0}, Ljava/lang/Object;-><init>()V

    new-instance v0, Lcom/supercell/titan/i;

    invoke-direct {v0, p0}, Lcom/supercell/titan/i;-><init>(Lcom/supercell/titan/h;)V

    iput-object v0, p0, Lcom/supercell/titan/h;->h:Ljava/lang/Runnable;

    return-void
.end method

.method static synthetic a(Lcom/supercell/titan/h;F)F
    .locals 0

    iput p1, p0, Lcom/supercell/titan/h;->e:F

    return p1
.end method

.method static synthetic a(Lcom/supercell/titan/h;)I
    .locals 1

    iget v0, p0, Lcom/supercell/titan/h;->c:I

    return v0
.end method

.method private a()Ljava/lang/String;
    .locals 3

    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    iget-object v0, v0, Lcom/supercell/titan/f;->c:Ljava/lang/String;

    iget-object v1, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    const-string/jumbo v2, ""

    iput-object v2, v1, Lcom/supercell/titan/f;->c:Ljava/lang/String;

    if-nez v0, :cond_0

    const-string/jumbo v0, ""

    :cond_0
    return-object v0
.end method

.method private a(II)V
    .locals 2

    iget v0, p0, Lcom/supercell/titan/h;->b:I

    if-nez v0, :cond_0

    iget v0, p0, Lcom/supercell/titan/h;->c:I

    if-nez v0, :cond_0

    iput p1, p0, Lcom/supercell/titan/h;->b:I

    iput p2, p0, Lcom/supercell/titan/h;->c:I

    :cond_0
    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    const/4 v1, 0x1

    invoke-static {v0, v1}, Lcom/supercell/titan/f;->d(Lcom/supercell/titan/f;Z)Z

    return-void
.end method

.method private b()V
    .locals 2

    const/4 v1, 0x1

    invoke-static {}, Lcom/supercell/titan/GameApp;->getInstance()Lcom/supercell/titan/GameApp;

    move-result-object v0

    if-eqz v0, :cond_0

    invoke-static {}, Lcom/supercell/titan/GameApp;->deinit()V

    iput-boolean v1, v0, Lcom/supercell/titan/GameApp;->a:Z

    invoke-virtual {v0}, Lcom/supercell/titan/GameApp;->finish()V

    iput-boolean v1, p0, Lcom/supercell/titan/h;->g:Z

    :cond_0
    return-void
.end method


# virtual methods
.method public final onDrawFrame(Ljavax/microedition/khronos/opengles/GL10;)V
    .locals 8

    const/4 v7, 0x1

    const/4 v6, 0x0

    const/4 v1, 0x0

    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    invoke-static {v0}, Lcom/supercell/titan/f;->a(Lcom/supercell/titan/f;)Z

    move-result v0

    if-nez v0, :cond_0

    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    invoke-static {v0}, Lcom/supercell/titan/f;->b(Lcom/supercell/titan/f;)Z

    move-result v0

    if-nez v0, :cond_1

    :cond_0
    :goto_0
    return-void

    :cond_1
    iget-boolean v0, p0, Lcom/supercell/titan/h;->g:Z

    if-nez v0, :cond_0

    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    invoke-static {v0}, Lcom/supercell/titan/f;->c(Lcom/supercell/titan/f;)Z

    move-result v0

    if-eqz v0, :cond_2

    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    invoke-static {v0, v1}, Lcom/supercell/titan/f;->a(Lcom/supercell/titan/f;Z)Z

    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    invoke-static {v0, v1}, Lcom/supercell/titan/f;->b(Lcom/supercell/titan/f;Z)Z

    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    invoke-static {v0, v1}, Lcom/supercell/titan/f;->c(Lcom/supercell/titan/f;Z)Z

    sget-object v0, Lcom/supercell/titan/ApplicationUtil;->a:Ljava/util/concurrent/atomic/AtomicBoolean;

    invoke-virtual {v0, v7, v1}, Ljava/util/concurrent/atomic/AtomicBoolean;->compareAndSet(ZZ)Z

    invoke-static {}, Lcom/supercell/titan/GameApp;->deinit()V

    :cond_2
    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    invoke-static {v0}, Lcom/supercell/titan/f;->d(Lcom/supercell/titan/f;)Z

    move-result v0

    if-eqz v0, :cond_5

    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    invoke-static {v0}, Lcom/supercell/titan/f;->e(Lcom/supercell/titan/f;)Z

    move-result v0

    if-nez v0, :cond_3

    invoke-static {}, Lcom/supercell/titan/ApplicationUtil;->requestAdvertiserInfoOnNewThread()V

    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    invoke-static {v0, v7}, Lcom/supercell/titan/f;->c(Lcom/supercell/titan/f;Z)Z

    :cond_3
    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    invoke-static {v0}, Lcom/supercell/titan/f;->f(Lcom/supercell/titan/f;)Z

    move-result v0

    if-nez v0, :cond_5

    invoke-static {}, Lcom/supercell/titan/GameApp;->isNativeLibraryLoaded()Z

    move-result v0

    if-eqz v0, :cond_5

    sget-object v0, Lcom/supercell/titan/ApplicationUtil;->a:Ljava/util/concurrent/atomic/AtomicBoolean;

    invoke-virtual {v0}, Ljava/util/concurrent/atomic/AtomicBoolean;->get()Z

    move-result v0

    if-eqz v0, :cond_5

    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    invoke-static {v0, v1}, Lcom/supercell/titan/f;->d(Lcom/supercell/titan/f;Z)Z

    invoke-direct {p0}, Lcom/supercell/titan/h;->a()Ljava/lang/String;

    move-result-object v0

    iget-object v2, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    iget v3, p0, Lcom/supercell/titan/h;->b:I

    iget v4, p0, Lcom/supercell/titan/h;->c:I

    invoke-static {v3, v4, v0}, Lcom/supercell/titan/GameApp;->init(IILjava/lang/String;)Z

    move-result v0

    invoke-static {v2, v0}, Lcom/supercell/titan/f;->b(Lcom/supercell/titan/f;Z)Z

    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    invoke-static {v0}, Lcom/supercell/titan/f;->f(Lcom/supercell/titan/f;)Z

    move-result v0

    if-nez v0, :cond_4

    new-instance v0, Ljava/lang/Error;

    const-string/jumbo v1, "Failed to initialize game"

    invoke-direct {v0, v1}, Ljava/lang/Error;-><init>(Ljava/lang/String;)V

    throw v0

    :cond_4
    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    iget-object v0, v0, Lcom/supercell/titan/f;->d:Ljava/lang/String;

    invoke-static {v0}, Lcom/supercell/titan/GameApp;->handleDeeplinkURL(Ljava/lang/String;)V

    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    const/4 v2, 0x0

    iput-object v2, v0, Lcom/supercell/titan/f;->d:Ljava/lang/String;

    :cond_5
    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    invoke-static {v0}, Lcom/supercell/titan/f;->f(Lcom/supercell/titan/f;)Z

    move-result v0

    if-eqz v0, :cond_0

    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    invoke-static {v0}, Lcom/supercell/titan/f;->g(Lcom/supercell/titan/f;)Z

    move-result v0

    if-nez v0, :cond_0

    invoke-static {}, Lcom/supercell/titan/GameApp;->getInstance()Lcom/supercell/titan/GameApp;

    move-result-object v3

    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    iget-boolean v0, v0, Lcom/supercell/titan/f;->e:Z

    if-eqz v0, :cond_6

    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    iput-boolean v1, v0, Lcom/supercell/titan/f;->e:Z

    invoke-direct {p0}, Lcom/supercell/titan/h;->a()Ljava/lang/String;

    move-result-object v0

    invoke-static {v0}, Lcom/supercell/titan/GameApp;->start(Ljava/lang/String;)V

    :cond_6
    iget-object v4, v3, Lcom/supercell/titan/GameApp;->m:Ljava/util/Vector;

    invoke-virtual {v4}, Ljava/util/Vector;->size()I

    move-result v5

    move v2, v1

    :goto_1
    if-ge v2, v5, :cond_7

    invoke-virtual {v4, v1}, Ljava/util/Vector;->remove(I)Ljava/lang/Object;

    move-result-object v0

    check-cast v0, Ljava/lang/String;

    invoke-static {v0}, Lcom/supercell/titan/GameApp;->logDebuggerException(Ljava/lang/String;)V

    add-int/lit8 v0, v2, 0x1

    move v2, v0

    goto :goto_1

    :cond_7
    iget-object v0, v3, Lcom/supercell/titan/GameApp;->i:Lcom/supercell/titan/PurchaseManager;

    invoke-virtual {v0}, Lcom/supercell/titan/PurchaseManager;->c()V

    sget-boolean v0, Lcom/supercell/titan/NativeDialogManager;->a:Z

    if-eqz v0, :cond_8

    sput-boolean v1, Lcom/supercell/titan/NativeDialogManager;->a:Z

    sget v0, Lcom/supercell/titan/NativeDialogManager;->c:I

    sget v2, Lcom/supercell/titan/NativeDialogManager;->b:I

    invoke-static {v0, v2}, Lcom/supercell/titan/GameApp;->dialogDismissed(II)V

    :cond_8
    invoke-static {}, Lcom/supercell/titan/NativeHTTPClientManager;->getInstance()Lcom/supercell/titan/NativeHTTPClientManager;

    invoke-static {}, Lcom/supercell/titan/NativeHTTPClientManager;->updateBeforeFrame()V

    invoke-static {}, Lcom/supercell/titan/NativeDialogManager;->isDialogVisible()Z

    move-result v0

    if-nez v0, :cond_0

    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    invoke-static {v0}, Lcom/supercell/titan/f;->h(Lcom/supercell/titan/f;)Z

    move-result v0

    if-eqz v0, :cond_9

    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    invoke-static {v0, v1}, Lcom/supercell/titan/f;->e(Lcom/supercell/titan/f;Z)Z

    invoke-static {}, Lcom/supercell/titan/GameApp;->backButtonPressed()Z

    move-result v0

    if-nez v0, :cond_9

    invoke-direct {p0}, Lcom/supercell/titan/h;->b()V

    goto/16 :goto_0

    :cond_9
    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    iget-object v0, v0, Lcom/supercell/titan/f;->g:Ljava/util/Vector;

    invoke-virtual {v0}, Ljava/util/Vector;->size()I

    move-result v3

    move v2, v1

    :goto_2
    if-ge v2, v3, :cond_a

    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    iget-object v0, v0, Lcom/supercell/titan/f;->g:Ljava/util/Vector;

    invoke-virtual {v0, v1}, Ljava/util/Vector;->remove(I)Ljava/lang/Object;

    move-result-object v0

    check-cast v0, Lcom/supercell/titan/k;

    iget-object v4, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    invoke-static {v4, v0}, Lcom/supercell/titan/f;->a(Lcom/supercell/titan/f;Lcom/supercell/titan/k;)V

    iget-object v4, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    iget-object v4, v4, Lcom/supercell/titan/f;->f:Ljava/util/Vector;

    invoke-virtual {v4, v0}, Ljava/util/Vector;->add(Ljava/lang/Object;)Z

    add-int/lit8 v0, v2, 0x1

    move v2, v0

    goto :goto_2

    :cond_a
    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    iget-boolean v0, v0, Lcom/supercell/titan/f;->i:Z

    if-eqz v0, :cond_d

    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    iput-boolean v1, v0, Lcom/supercell/titan/f;->i:Z

    invoke-static {}, Lcom/supercell/titan/GameApp;->clearTouches()V

    move v0, v1

    :goto_3
    iget-object v2, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    iget v2, v2, Lcom/supercell/titan/f;->h:I

    if-ge v0, v2, :cond_b

    iget-object v2, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    iget-object v2, v2, Lcom/supercell/titan/f;->j:[Lcom/supercell/titan/j;

    aget-object v2, v2, v0

    iget v3, v2, Lcom/supercell/titan/j;->a:I

    iget v4, v2, Lcom/supercell/titan/j;->b:I

    iget v2, v2, Lcom/supercell/titan/j;->d:I

    invoke-static {v3, v4, v2, v0}, Lcom/supercell/titan/GameApp;->setTouch(IIII)V

    add-int/lit8 v0, v0, 0x1

    goto :goto_3

    :cond_b
    move v0, v1

    :goto_4
    iget-object v2, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    iget v2, v2, Lcom/supercell/titan/f;->h:I

    if-ge v0, v2, :cond_d

    iget-object v2, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    iget-object v2, v2, Lcom/supercell/titan/f;->j:[Lcom/supercell/titan/j;

    aget-object v2, v2, v0

    iput-boolean v7, v2, Lcom/supercell/titan/j;->e:Z

    iget-object v2, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    iget-object v2, v2, Lcom/supercell/titan/f;->j:[Lcom/supercell/titan/j;

    aget-object v2, v2, v0

    iget-boolean v2, v2, Lcom/supercell/titan/j;->f:Z

    if-eqz v2, :cond_c

    iget-object v2, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    invoke-static {v2, v0}, Lcom/supercell/titan/f;->a(Lcom/supercell/titan/f;I)V

    iget-object v2, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    iput-boolean v7, v2, Lcom/supercell/titan/f;->i:Z

    goto :goto_4

    :cond_c
    add-int/lit8 v0, v0, 0x1

    goto :goto_4

    :cond_d
    sget-boolean v0, Lcom/supercell/titan/GCMIntentService;->a:Z

    if-eqz v0, :cond_e

    sput-boolean v1, Lcom/supercell/titan/GCMIntentService;->a:Z

    invoke-static {}, Lcom/supercell/titan/GCMIntentService;->getErrorCode()I

    move-result v0

    invoke-static {}, Lcom/supercell/titan/GCMIntentService;->getID()Ljava/lang/String;

    move-result-object v2

    invoke-static {}, Lcom/supercell/titan/GCMIntentService;->getErrorMessage()Ljava/lang/String;

    move-result-object v3

    invoke-static {v0, v2, v3}, Lcom/supercell/titan/GameApp;->setPushNotificationValues(ILjava/lang/String;Ljava/lang/String;)V

    :cond_e
    sget-boolean v0, Lcom/supercell/titan/VirtualKeyboardHandler;->a:Z

    if-eqz v0, :cond_13

    iget v0, p0, Lcom/supercell/titan/h;->f:I

    if-nez v0, :cond_f

    invoke-static {}, Lcom/supercell/titan/GameApp;->getInstance()Lcom/supercell/titan/GameApp;

    move-result-object v0

    iget-object v2, p0, Lcom/supercell/titan/h;->h:Ljava/lang/Runnable;

    invoke-virtual {v0, v2}, Lcom/supercell/titan/GameApp;->runOnUiThread(Ljava/lang/Runnable;)V

    :cond_f
    iget v0, p0, Lcom/supercell/titan/h;->f:I

    add-int/lit8 v0, v0, 0x1

    iput v0, p0, Lcom/supercell/titan/h;->f:I

    iget v0, p0, Lcom/supercell/titan/h;->f:I

    const/4 v2, 0x4

    if-ne v0, v2, :cond_10

    iput v1, p0, Lcom/supercell/titan/h;->f:I

    :cond_10
    iget v0, p0, Lcom/supercell/titan/h;->e:F

    iget v1, p0, Lcom/supercell/titan/h;->d:F

    cmpl-float v1, v0, v1

    if-lez v1, :cond_11

    iput v0, p0, Lcom/supercell/titan/h;->d:F

    invoke-static {v0, v6}, Lcom/supercell/titan/GameApp;->keyboardSizeChanged(FF)V

    :cond_11
    :goto_5
    invoke-static {}, Lcom/supercell/titan/GameApp;->update()Z

    move-result v0

    sget-object v1, Lcom/supercell/titan/GameApp;->f:Ljava/util/Vector;

    invoke-virtual {v1}, Ljava/util/Vector;->isEmpty()Z

    move-result v1

    if-nez v1, :cond_12

    invoke-static {}, Ljava/lang/System;->currentTimeMillis()J

    move-result-wide v2

    invoke-static {v2, v3}, Lcom/supercell/titan/GameApp;->removeOutOfDateNotifications(J)V

    :cond_12
    if-eqz v0, :cond_0

    invoke-direct {p0}, Lcom/supercell/titan/h;->b()V

    goto/16 :goto_0

    :cond_13
    invoke-static {v6, v6}, Lcom/supercell/titan/GameApp;->keyboardSizeChanged(FF)V

    iput v6, p0, Lcom/supercell/titan/h;->d:F

    iput v6, p0, Lcom/supercell/titan/h;->e:F

    iput v1, p0, Lcom/supercell/titan/h;->f:I

    goto :goto_5
.end method

.method public final onSurfaceChanged(Ljavax/microedition/khronos/opengles/GL10;II)V
    .locals 1

    invoke-static {}, Lcom/supercell/titan/GameApp;->getInstance()Lcom/supercell/titan/GameApp;

    move-result-object v0

    iget v0, v0, Lcom/supercell/titan/GameApp;->l:I

    packed-switch v0, :pswitch_data_0

    :pswitch_0
    invoke-direct {p0, p2, p3}, Lcom/supercell/titan/h;->a(II)V

    :cond_0
    :goto_0
    return-void

    :pswitch_1
    if-lt p2, p3, :cond_0

    invoke-direct {p0, p2, p3}, Lcom/supercell/titan/h;->a(II)V

    goto :goto_0

    :pswitch_2
    if-gt p2, p3, :cond_0

    invoke-direct {p0, p2, p3}, Lcom/supercell/titan/h;->a(II)V

    goto :goto_0

    nop

    :pswitch_data_0
    .packed-switch 0x0
        :pswitch_1
        :pswitch_2
        :pswitch_0
        :pswitch_0
        :pswitch_0
        :pswitch_0
        :pswitch_1
        :pswitch_2
    .end packed-switch
.end method

.method public final onSurfaceCreated(Ljavax/microedition/khronos/opengles/GL10;Ljavax/microedition/khronos/egl/EGLConfig;)V
    .locals 3

    const/4 v2, 0x1

    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    invoke-static {v0}, Lcom/supercell/titan/f;->f(Lcom/supercell/titan/f;)Z

    move-result v0

    if-eqz v0, :cond_0

    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    invoke-static {v0, v2}, Lcom/supercell/titan/f;->a(Lcom/supercell/titan/f;Z)Z

    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    const/4 v1, 0x0

    iput-boolean v1, v0, Lcom/supercell/titan/f;->e:Z

    :cond_0
    iget-object v0, p0, Lcom/supercell/titan/h;->a:Lcom/supercell/titan/f;

    invoke-virtual {v0, v2}, Lcom/supercell/titan/f;->setRenderMode(I)V

    return-void
.end method
