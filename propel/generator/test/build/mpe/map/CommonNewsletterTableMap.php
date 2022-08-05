<?php



/**
 * This class defines the structure of the 'Newsletter' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonNewsletterTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonNewsletterTableMap';

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
        $this->setName('Newsletter');
        $this->setPhpName('CommonNewsletter');
        $this->setClassname('CommonNewsletter');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('objet', 'Objet', 'VARCHAR', true, 255, '');
        $this->addColumn('corps', 'Corps', 'LONGVARCHAR', true, null, null);
        $this->addColumn('id_service_redacteur', 'IdServiceRedacteur', 'INTEGER', true, null, null);
        $this->addColumn('nom_redacteur', 'NomRedacteur', 'VARCHAR', true, 100, null);
        $this->addColumn('prenom_redacteur', 'PrenomRedacteur', 'VARCHAR', true, 100, null);
        $this->addColumn('envoye_par_nom', 'EnvoyeParNom', 'VARCHAR', false, 100, null);
        $this->addColumn('envoye_par_prenom', 'EnvoyeParPrenom', 'VARCHAR', false, 100, null);
        $this->addColumn('envoye_par_email', 'EnvoyeParEmail', 'VARCHAR', false, 100, null);
        $this->addColumn('date_creation', 'DateCreation', 'VARCHAR', true, 25, null);
        $this->addColumn('date_derniere_modification', 'DateDerniereModification', 'VARCHAR', false, 25, null);
        $this->addColumn('date_envoi', 'DateEnvoi', 'VARCHAR', false, 25, null);
        $this->addColumn('id_service_destinataire', 'IdServiceDestinataire', 'VARCHAR', false, 11, null);
        $this->addColumn('statut', 'Statut', 'INTEGER', false, 2, null);
        $this->addColumn('destinataires', 'Destinataires', 'LONGVARCHAR', false, null, null);
        $this->addColumn('inclure_services_descendants', 'InclureServicesDescendants', 'CHAR', true, null, '0');
        $this->getColumn('inclure_services_descendants', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('type_destinataire', 'TypeDestinataire', 'INTEGER', true, null, 1);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonNewsletterPieceJointe', 'CommonNewsletterPieceJointe', RelationMap::ONE_TO_MANY, array('id' => 'id_newsletter', ), 'CASCADE', 'CASCADE', 'CommonNewsletterPieceJointes');
    } // buildRelations()

} // CommonNewsletterTableMap
