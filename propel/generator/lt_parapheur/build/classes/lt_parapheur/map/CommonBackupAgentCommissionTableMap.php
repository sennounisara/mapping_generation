<?php



/**
 * This class defines the structure of the 'backup_Agent_Commission' table.
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
class CommonBackupAgentCommissionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonBackupAgentCommissionTableMap';

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
        $this->setName('backup_Agent_Commission');
        $this->setPhpName('CommonBackupAgentCommission');
        $this->setClassname('CommonBackupAgentCommission');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addPrimaryKey('id_commission', 'IdCommission', 'INTEGER', true, null, 0);
        $this->addPrimaryKey('id_agent', 'IdAgent', 'INTEGER', true, null, 0);
        $this->addColumn('convocation', 'Convocation', 'BLOB', false, null, null);
        $this->addColumn('convoc_send', 'ConvocSend', 'CHAR', true, null, '0');
        $this->addColumn('nom_convoc', 'NomConvoc', 'VARCHAR', false, 255, null);
        $this->addColumn('contenu_envoi', 'ContenuEnvoi', 'LONGVARCHAR', false, null, null);
        $this->addColumn('fichier_envoye', 'FichierEnvoye', 'BLOB', false, null, null);
        $this->addColumn('nom_fichier_envoye', 'NomFichierEnvoye', 'VARCHAR', false, 255, null);
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

} // CommonBackupAgentCommissionTableMap
