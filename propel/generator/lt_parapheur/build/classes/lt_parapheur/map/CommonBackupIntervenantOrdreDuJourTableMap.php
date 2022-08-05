<?php



/**
 * This class defines the structure of the 'backup_Intervenant_Ordre_Du_Jour' table.
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
class CommonBackupIntervenantOrdreDuJourTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonBackupIntervenantOrdreDuJourTableMap';

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
        $this->setName('backup_Intervenant_Ordre_Du_Jour');
        $this->setPhpName('CommonBackupIntervenantOrdreDuJour');
        $this->setClassname('CommonBackupIntervenantOrdreDuJour');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('id_ordre_du_jour', 'IdOrdreDuJour', 'INTEGER', true, null, 0);
        $this->addColumn('id_intervenant', 'IdIntervenant', 'INTEGER', true, null, 0);
        $this->addColumn('id_agent', 'IdAgent', 'INTEGER', true, null, 0);
        $this->addColumn('convocation', 'Convocation', 'BLOB', false, null, null);
        $this->addColumn('convoc_send', 'ConvocSend', 'CHAR', true, null, '0');
        $this->addColumn('nom_convoc', 'NomConvoc', 'VARCHAR', false, 255, null);
        $this->addColumn('contenu_envoi', 'ContenuEnvoi', 'LONGVARCHAR', false, null, null);
        $this->addColumn('nom_fichier_envoye', 'NomFichierEnvoye', 'VARCHAR', false, 255, null);
        $this->addColumn('fichier_envoye', 'FichierEnvoye', 'BLOB', false, null, null);
        $this->addColumn('date_envoi', 'DateEnvoi', 'TIMESTAMP', false, null, null);
        $this->addColumn('type_voix', 'TypeVoix', 'VARCHAR', true, 50, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonBackupIntervenantOrdreDuJourTableMap
