<?php



/**
 * This class defines the structure of the 'notification_web_service' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lt_parapheur.map
 */
class NotificationWebServiceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.NotificationWebServiceTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('notification_web_service');
        $this->setPhpName('NotificationWebService');
        $this->setClassname('NotificationWebService');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_NOTIFICATION_WEB_SERVICE', 'IdNotificationWebService', 'INTEGER', true, null, null);
        $this->addColumn('ID_DEMANDE', 'IdDemande', 'INTEGER', true, null, null);
        $this->addColumn('ID_STATUT', 'IdStatut', 'INTEGER', true, null, null);
        $this->addColumn('LIBELLE_STATUT', 'LibelleStatut', 'VARCHAR', true, 255, null);
        $this->addColumn('LIBELLE_STATUT_AR', 'LibelleStatutAr', 'VARCHAR', false, 255, null);
        $this->addColumn('DATE_STATUT', 'DateStatut', 'TIMESTAMP', true, null, null);
        $this->addColumn('DATE', 'Date', 'TIMESTAMP', false, null, null);
        $this->addColumn('ID_ORGANISME', 'IdOrganisme', 'INTEGER', true, null, null);
        $this->addColumn('ID_UTILISATEUR', 'IdUtilisateur', 'INTEGER', true, null, null);
        $this->addColumn('ETAT_NOTIFICATION', 'EtatNotification', 'CHAR', true, null, '0');
        $this->getColumn('ETAT_NOTIFICATION', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ETAT_ACQUITTEMENT', 'EtatAcquittement', 'CHAR', true, null, '0');
        $this->getColumn('ETAT_ACQUITTEMENT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('DATE_ACQUITTEMENT', 'DateAcquittement', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // NotificationWebServiceTableMap
