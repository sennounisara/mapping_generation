<?php



/**
 * This class defines the structure of the 'exec_repartition' table.
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
class CommonExecRepartitionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonExecRepartitionTableMap';

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
        $this->setName('exec_repartition');
        $this->setPhpName('CommonExecRepartition');
        $this->setClassname('CommonExecRepartition');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('id_contrat', 'IdContrat', 'INTEGER', 'exec_contrat', 'id_contrat', true, null, null);
        $this->addForeignKey('id_facture', 'IdFacture', 'INTEGER', 'exec_facture', 'id', true, null, null);
        $this->addForeignKey('id_prix', 'IdPrix', 'INTEGER', 'exec_prix', 'id', true, null, null);
        $this->addForeignKey('id_contractant', 'IdContractant', 'INTEGER', 'exec_contractant', 'id', true, null, null);
        $this->addColumn('prix_unitaire', 'PrixUnitaire', 'DOUBLE', true, null, null);
        $this->addColumn('taux_tva', 'TauxTva', 'DOUBLE', true, null, null);
        $this->addColumn('pourcentage_realise', 'PourcentageRealise', 'DOUBLE', true, null, null);
        $this->addColumn('cumul_pourcent_realise', 'CumulPourcentRealise', 'DOUBLE', true, null, null);
        $this->addColumn('montant_facture_ht', 'MontantFactureHt', 'DOUBLE', true, null, null);
        $this->addColumn('montant_facture_ttc', 'MontantFactureTtc', 'DOUBLE', true, null, null);
        $this->addColumn('montant_paye_ht', 'MontantPayeHt', 'DOUBLE', false, null, null);
        $this->addColumn('montant_paye_ttc', 'MontantPayeTtc', 'DOUBLE', false, null, null);
        $this->addForeignKey('id_agent_crea', 'IdAgentCrea', 'INTEGER', 'Agent', 'id', false, null, null);
        $this->addForeignKey('id_entreprise_crea', 'IdEntrepriseCrea', 'INTEGER', 'Entreprise', 'id', false, null, null);
        $this->addColumn('date_crea', 'DateCrea', 'TIMESTAMP', true, null, null);
        $this->addForeignKey('id_agent_modif', 'IdAgentModif', 'INTEGER', 'Agent', 'id', false, null, null);
        $this->addColumn('date_modif', 'DateModif', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonAgentRelatedByIdAgentCrea', 'CommonAgent', RelationMap::MANY_TO_ONE, array('id_agent_crea' => 'id', ), null, null);
        $this->addRelation('CommonAgentRelatedByIdAgentModif', 'CommonAgent', RelationMap::MANY_TO_ONE, array('id_agent_modif' => 'id', ), null, null);
        $this->addRelation('CommonExecContractant', 'CommonExecContractant', RelationMap::MANY_TO_ONE, array('id_contractant' => 'id', ), null, null);
        $this->addRelation('CommonExecContrat', 'CommonExecContrat', RelationMap::MANY_TO_ONE, array('id_contrat' => 'id_contrat', ), null, null);
        $this->addRelation('CommonEntreprise', 'CommonEntreprise', RelationMap::MANY_TO_ONE, array('id_entreprise_crea' => 'id', ), null, null);
        $this->addRelation('CommonExecFacture', 'CommonExecFacture', RelationMap::MANY_TO_ONE, array('id_facture' => 'id', ), null, null);
        $this->addRelation('CommonExecPrix', 'CommonExecPrix', RelationMap::MANY_TO_ONE, array('id_prix' => 'id', ), null, null);
    } // buildRelations()

} // CommonExecRepartitionTableMap
