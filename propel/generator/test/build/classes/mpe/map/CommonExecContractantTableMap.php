<?php



/**
 * This class defines the structure of the 'exec_contractant' table.
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
class CommonExecContractantTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonExecContractantTableMap';

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
        $this->setName('exec_contractant');
        $this->setPhpName('CommonExecContractant');
        $this->setClassname('CommonExecContractant');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('id_contrat', 'IdContrat', 'INTEGER', 'exec_contrat', 'id_contrat', true, null, null);
        $this->addForeignKey('id_type_contractant', 'IdTypeContractant', 'INTEGER', 'exec_type_contractant', 'id', true, null, null);
        $this->addForeignKey('id_type_structure', 'IdTypeStructure', 'INTEGER', 'exec_type_structure', 'id', true, null, null);
        $this->addForeignKey('id_parent', 'IdParent', 'INTEGER', 'exec_contractant', 'id', false, null, null);
        $this->addColumn('raison_sociale', 'RaisonSociale', 'VARCHAR', true, 255, null);
        $this->addColumn('adresse', 'Adresse', 'LONGVARCHAR', true, null, null);
        $this->addColumn('complement_adresse', 'ComplementAdresse', 'LONGVARCHAR', false, null, null);
        $this->addColumn('code_postal', 'CodePostal', 'INTEGER', false, 5, null);
        $this->addColumn('ville', 'Ville', 'INTEGER', false, null, null);
        $this->addColumn('telephone', 'Telephone', 'VARCHAR', false, 20, null);
        $this->addColumn('fax', 'Fax', 'VARCHAR', false, 20, null);
        $this->addColumn('rc_num', 'RcNum', 'VARCHAR', false, 250, null);
        $this->addColumn('rc_ville', 'RcVille', 'INTEGER', false, null, null);
        $this->addColumn('ice', 'Ice', 'VARCHAR', false, 250, null);
        $this->addColumn('ifu', 'Ifu', 'VARCHAR', false, 250, null);
        $this->addColumn('montant_attribue_ht', 'MontantAttribueHt', 'DOUBLE', false, null, null);
        $this->addColumn('montant_attribue_ttc', 'MontantAttribueTtc', 'DOUBLE', false, null, null);
        $this->addColumn('accessible_fournisseur', 'AccessibleFournisseur', 'INTEGER', false, 1, null);
        $this->addColumn('date_crea', 'DateCrea', 'TIMESTAMP', false, null, null);
        $this->addColumn('id_agent_crea', 'IdAgentCrea', 'INTEGER', false, null, null);
        $this->addColumn('date_modif', 'DateModif', 'TIMESTAMP', false, null, null);
        $this->addColumn('id_agent_modif', 'IdAgentModif', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonExecContrat', 'CommonExecContrat', RelationMap::MANY_TO_ONE, array('id_contrat' => 'id_contrat', ), null, null);
        $this->addRelation('CommonExecContractantRelatedByIdParent', 'CommonExecContractant', RelationMap::MANY_TO_ONE, array('id_parent' => 'id', ), null, null);
        $this->addRelation('CommonExecTypeContractant', 'CommonExecTypeContractant', RelationMap::MANY_TO_ONE, array('id_type_contractant' => 'id', ), null, null);
        $this->addRelation('CommonExecTypeStructure', 'CommonExecTypeStructure', RelationMap::MANY_TO_ONE, array('id_type_structure' => 'id', ), null, null);
        $this->addRelation('CommonExecContact', 'CommonExecContact', RelationMap::ONE_TO_MANY, array('id' => 'id_contractant', ), null, null, 'CommonExecContacts');
        $this->addRelation('CommonExecContractantRelatedById', 'CommonExecContractant', RelationMap::ONE_TO_MANY, array('id' => 'id_parent', ), null, null, 'CommonExecContractantsRelatedById');
        $this->addRelation('CommonExecEvenement', 'CommonExecEvenement', RelationMap::ONE_TO_MANY, array('id' => 'id_contractant', ), null, null, 'CommonExecEvenements');
        $this->addRelation('CommonExecFacture', 'CommonExecFacture', RelationMap::ONE_TO_MANY, array('id' => 'id_contractant', ), null, null, 'CommonExecFactures');
        $this->addRelation('CommonExecInscritContrat', 'CommonExecInscritContrat', RelationMap::ONE_TO_MANY, array('id' => 'id_contractant', ), null, null, 'CommonExecInscritContrats');
        $this->addRelation('CommonExecRepartition', 'CommonExecRepartition', RelationMap::ONE_TO_MANY, array('id' => 'id_contractant', ), null, null, 'CommonExecRepartitions');
    } // buildRelations()

} // CommonExecContractantTableMap
